<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\ImageStorageService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        $all_posts = DB::table('posts')->get();
        return view('pages.blog', compact('all_posts'));
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_posts = DB::table('posts')->get();
        // dd($all_posts);
        return view('pages.posts-index', compact('all_posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'default_img' => 'required',
                'pg1' => 'required',
                'pg2' => 'required',
                'password' => 'required'
            ]
        );
        $EditorPassword = 'Paradise@Admin2023';
        if ($request->password === $EditorPassword) {

            // NB: all images are optional
            // 1. store post to db
            $newPostID = $this->createNewPost();

            ##########################################
            ###Process All Images From HTTP Request###
            ##########################################

            $allImages = request()->only(['default_img', 'img1', 'img2', 'img3']);

            // $filenames = $this->storeImagesToServer($allImages); //former code
            $filenames = (new ImageStorageService)->storeImagesToServer($allImages, 'posts'); //refactored code

            $updatedPostWithImages = $this->linkImagesToPostInDB($newPostID, $filenames);
            ################## EOL PROCESSING ########################

            return $this->postCreationResponse($newPostID, $updatedPostWithImages);
        } else {
            return back()->with('failed', 'Oops! Invalid Password : Try Again...');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post_id)
    {
        $post = DB::table('posts')->find($post_id);
        return view('pages.blog_details', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = DB::table('posts')->find($id); //get the related post

        return view('pages.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $EditorPassword = 'Paradise@Admin2023';
        if ($request->password === $EditorPassword) {
            // NB: all images are optional
            unset($request->password, $request['password']);
            $requestWithoutImages = $request->except(['default_img', 'img0', '_token', '_method']);

            $relatedPost = DB::table('posts')->find($id); // get related post

            DB::table('posts')->whereId($id)->update($requestWithoutImages); // 1. update post in db

            ##########################################
            ###Process All Images From HTTP Request###
            ##########################################

            $newkey = $this->lookForSlot($request, $relatedPost);

            $allImages = $newkey ? $request->only(['default_img', $newkey]) : $request->only('default_img');

            // $filenames = $this->storeImagesToServer($allImages); //former code
            $filenames = (new ImageStorageService)->storeImagesToServer($allImages, 'posts'); //refactored code


            $updatedPostWithImages = $this->linkImagesToPostInDB($id, $filenames);
            ################## EOL IMage PROCESSING ########################

            return $this->postUpdateResponse($id, $updatedPostWithImages);
        } else {
            return back()->with('failed', 'Oops! Invalid Password : Try Again...');
        }
    }


    public function deleteImg($post_id, $imgkey)
    {
        $relatedPost = DB::table('posts')->find($post_id);

        $fileToDelete = $relatedPost->$imgkey; //returns file path stored in db

        // delete from server
        $this->delFile($fileToDelete);

        // remove from db records
        DB::table('posts')->whereId($post_id)->update([$imgkey => null]);

        return back()->with('success', 'image deleted');
        // save() only works on eloquent models
    }

    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(string $post_id)
    {
        $relatedPost = DB::table('posts')->find($post_id);

        // grab columns that contain file links in the db
        $imgColumns = ['default_img', 'img1', 'img2', 'img3'];

        foreach ($imgColumns as $column) {
            $imgFilePath = $relatedPost->$column; // 1. get the assoc files

            if (isset($imgFilePath)) $this->delFile($imgFilePath);  // 2. delete assoc files (if exist)
        }
        // delete the post from the db
        DB::table('posts')->where('id', $post_id)->delete();

        return redirect()->route('posts.index')->with('success', 'Post Deleted');
    }

    // helpers


    // {udo: lecture}leaving this to teach Ugo sth about refactoring and DRY principle
    // /**
    //  * Stores images from a request to the server (public driver)
    //  * and returns an array of paths for all images saved
    //  * 
    //  * @return Array Assoc Array of paths for all images saved
    //  */
    // public function storeImagesToServer(array $allImages)
    // {
    //     // dd('jej', $allImages);
    //     $destinationPath = 'posts/images';
    //     $processedImages = array();
    //     foreach ($allImages as $key => $image) {

    //         if (isset($image)) {
    //             $myimageOriginalName = request($key)->getClientOriginalName();

    //             // remove spaces from filename
    //             $myimageNewName = str_replace(' ', '_', $myimageOriginalName);

    //             $myImgPath = request($key)->move(public_path($destinationPath), $myimageNewName);

    //             // obtain the processed image relative path
    //             $resultPathArray = explode('public', $myImgPath, 2);
    //             $filenameInDB = $resultPathArray[1];
    //             $processedImages[$key] = $filenameInDB;
    //         }


    //         // post creation
    //         // make slug for post
    //     }
    //     return $processedImages;
    // }

    /**
     * Searches for an available slot to store new image to post in db
     * returns false if no available slot is found
     */
    public function lookForSlot($request, $relatedPost)
    {
        // dd($relatedPost);
        $newkey = '';
        if ($request['img0']) {
            // dd('fuf', $request->all());
            $imagesInDB = ['img1', 'img2', 'img3'];
            foreach ($imagesInDB as $key) {
                if (empty($relatedPost->$key)) {
                    $request[$key] = $request['img0'];
                    $newkey = $key;
                    unset($request['img0']);
                    break;
                }
                continue;
            }
            return $newkey;
        }
        return false;
    }

    public function linkImagesToPostInDB($post_id, $filenames)
    {
        if ($filenames) {

            $relatedPost = DB::table('posts')->find($post_id);

            // 
            /**
             * @var itemsToBeReplaced refers to the column names of the images to be replaced
             * 
             * eg. img1, img2, img3, default_img
             * 
             */
            $itemsToBeReplaced = array_keys($filenames);

            //  verify that any old data that exists is deleted
            foreach ($itemsToBeReplaced as $key) {
                if (
                    isset($relatedPost->$key) 
                    and $fileToDelete = $relatedPost->$key
                    and file_exists(public_path($fileToDelete))
                )
                    $this->delFile($fileToDelete); # code...delete the old data
            }

            // update final changes to db
            return $updatedPostWithImages = DB::table('posts')->whereId($post_id)->update($filenames);
        }
        return false;
    }

    /**
     * Delete a file from public_path() using raw php
     */
    public function delFile($fileToDelete,)
    {
        if (!(file_exists(public_path($fileToDelete)) and unlink(public_path($fileToDelete))))
            dd('Oops! file not found in public_path()');
    }

    public function postCreationResponse($newPostID, $updatedPostWithImages)
    {

        if ($newPostID and $updatedPostWithImages)
            return back()->with('success', 'New Post Created Successfully');

        if ($newPostID and !$updatedPostWithImages)
            return back()->with('success', 'New Post Created Successfully, No Images Provided');

        return back()->with('failed', 'Oops! Error Occured : Try Again...');
    }

    public function postUpdateResponse($newPostID, $updatedPostWithImages)
    {

        if ($newPostID and $updatedPostWithImages)
            return back()->with('success', 'Post Updated Successfully with changes to images');

        if ($newPostID and !$updatedPostWithImages)
            return back()->with('success', 'Post Updated Successfully, No changes to Images');

        return back()->with('failed', 'Oops! Error Occured : Try Again...');
    }

    public function createNewPost()
    {

        // generatePostSlug
        $slugTemp = str_replace(' ', '-', request('title')); //replace space with hypen in Post title
        $slug = strtolower($slugTemp); // convert all tolowercase

        return $newPostID = DB::table('posts')->insertGetId([
            'title' =>  request('title'),
            'slug'  =>  $slug, //dynamic property (depends on post_title)
            'pg1'   =>  request('pg1'),
            'pg2'   =>  request('pg2'),
            'pg3'   =>  request('pg3'),
            'pg4'   =>  request('pg4'),
            'pg5'   =>  request('pg5'),
            'tags'  =>  request('tags') ?? 'kids'
        ]);
    }
}
