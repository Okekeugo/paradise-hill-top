<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\ImageStorageService;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_testimonials = DB::table('testimonials')->get();
        // dd($all_testimonials);
        return view('pages.testimonials-index', compact('all_testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create-testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'client_fname' => 'required',
                'client_lname' => 'required',
                'client_message' => 'required',
                'client_role' => 'required',
                'client_img' => 'nullable',
                'password' => 'required'
            ]
        );

        $EditorPassword = 'Paradise@Admin2023';

        if ($request->password === $EditorPassword) {
            // NB: client images are optional
            // 1. store testimonial to db
            $newTestimonialID = $this->createNewTestimonial();

            ##########################################
            ###Process All Images From HTTP Request###
            ##########################################

            $allImages = request()->only(['client_img']);

            $filenames = (new ImageStorageService)->storeImagesToServer($allImages, 'testimonials'); //refactored code
            // dd(
            //     $filenames,
            //     $request->all(),
            //     $request->client_fname
            // );

            $updatedTestimonialWithImage = $this->linkImageToTestimonialInDB($newTestimonialID, $filenames);
            ################## EOL PROCESSING ########################

            return $this->testimonialCreationResponse($newTestimonialID, $updatedTestimonialWithImage);
        } else {
            return back()->with('failed', 'Oops! Invalid Password : Try Again...');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //not needed for testimonials
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = DB::table('testimonials')->find($id); //get the related testimonial

        return view('pages.edit-testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $EditorPassword = 'Paradise@Admin2023';
        if ($request->password === $EditorPassword) {
            // NB: all images are optional
            unset($request->password, $request['password']);
            $requestWithoutImages = $request->except(['client_img', '_token', '_method']);

            $relatedTestimonial = DB::table('testimonials')->find($id); // get related Testimonial

            DB::table('testimonials')->whereId($id)->update($requestWithoutImages); // 1. update Testimonial in db

            ##########################################
            ###Process All Images From HTTP Request###
            ##########################################


            $allImages =  $request->only(['client_img']);

            // $filenames = $this->storeImagesToServer($allImages); //former code
            $filenames = (new ImageStorageService)->storeImagesToServer($allImages, 'testimonials'); //refactored code

            $updatedTestimonialWithImage = $this->linkImageToTestimonialInDB($id, $filenames);
            ################## EOL IMage PROCESSING ########################

            return $this->testimonialUpdateResponse($id, $updatedTestimonialWithImage);
        } else {
            return back()->with('failed', 'Oops! Invalid Password : Try Again...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function deleteImg($testimonial_id)
    {
        dd('delete image for a testimonial');

        $relatedTestimonial = DB::table('posts')->find($testimonial_id);

        $fileToDelete = $relatedTestimonial->client_img; //returns file path stored in db

        // delete from server
        $this->delFile($fileToDelete);

        // remove from db records
        DB::table('posts')->whereId($testimonial_id)->update(['client_img' => null]);

        return back()->with('success', 'image deleted');
    }


    // helpers

    public function createNewTestimonial()
    {
        return $newTestimonialID = DB::table('testimonials')->insertGetId([
            'client_fname' =>  request('client_fname'),
            'client_lname'   =>  request('client_lname'),
            'client_message'   =>  request('client_message'),
            'client_role'   =>  request('client_role'),
            'client_img'   =>  request('client_img') ?? null,
        ]);
    }

    public function testimonialCreationResponse($newTestimonailID, $updatedTestimonialWithImage)
    {

        if ($newTestimonailID and $updatedTestimonialWithImage)
            return back()->with('success', 'New Testimonial Created Successfully');

        if ($newTestimonailID and !$updatedTestimonialWithImage)
            return back()->with('success', 'New Testimonial Created Successfully, No Images Provided');

        return back()->with('failed', 'Oops! Error Occured : Try Again...');
    }

    public function testimonialUpdateResponse($newTestimonailID, $updatedTestimonialWithImage)
    {

        if ($newTestimonailID and $updatedTestimonialWithImage)
            return back()->with('success', 'Testimonial Updated Successfully with changes to images');

        if ($newTestimonailID and !$updatedTestimonialWithImage)
            return back()->with('success', 'Testimonial Updated Successfully, No changes to Images');

        return back()->with('failed', 'Oops! Error Occured : Try Again...');
    }

    public function linkImageToTestimonialInDB($testimonial_id, $filenames)
    {
        if ($filenames) {

            $relatedTestimonial = DB::table('testimonials')->find($testimonial_id);

            /**
             * @var itemsToBeReplaced refers to the column names of the images to be replaced
             * 
             * eg. img1, img2, img3, default_img
             * 
             */
            $itemsToBeReplaced = array_keys($filenames);

            //  verify that any old data that exists is deleted
            foreach ($itemsToBeReplaced as $key)
                if (
                    isset($relatedTestimonial->$key)
                    and $fileToDelete = $relatedTestimonial->$key
                    and file_exists(public_path($fileToDelete))
                )
                    $this->delFile($fileToDelete); # code...delete the old data

            // update final changes to db
            return $updatedTestimonialWithImage = DB::table('testimonials')->whereId($testimonial_id)->update($filenames);
        }
        return false;
    }


    /**
     * {udo: refactor ; refactor to action or service, it appears in two controllers or simply extract to Main Controller Class}
     * Delete a file from public_path() using raw php
     */
    public function delFile($fileToDelete,)
    {
        if (!(file_exists(public_path($fileToDelete)) and unlink(public_path($fileToDelete))))
            dd('Oops! file not found in public_path()');
    }
}
