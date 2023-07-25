<?php
namespace App\Services;

/**
 * 
 * This is a service because image file compression, resizing and other manipulations
 * 
 * would be implemented in this same service
 * 
 * Also image storage, update and deletion would also happen here, but for now, lets leave the 
 * name of the class as ImageStorageService, so that it only handles the ImageStorage for now
 * 
 * In the future, we shall make the code fully DRY
 * 
 */
class ImageStorageService
{



    /**
     * Stores images from a request to the server (public folder)
     * and returns an array of paths for all images saved
     * 
     * @return Array Assoc Array of paths for all images saved
     */
    public function storeImagesToServer(array $allImages, $purpose)
    {
        // dd('jej', $allImages);

        $destinationPath = '';

        if ($purpose == 'posts') {
            $destinationPath = 'posts/images';
        } elseif ($purpose == 'testimonials') {
            $destinationPath = 'testimonials/images';
        }

        $processedImages = array();
        foreach ($allImages as $key => $image) {

            if (isset($image)) {
                $myimageOriginalName = request($key)->getClientOriginalName();

                // remove spaces from filename
                $myimageNewName = str_replace(' ', '_', $myimageOriginalName . '_' . date('s') );

                $myImgPath = request($key)->move(public_path($destinationPath), $myimageNewName);

                // obtain the processed image relative path
                $resultPathArray = explode('public', $myImgPath, 2);
                $filenameInDB = $resultPathArray[1];
                $processedImages[$key] = $filenameInDB;
            }


            // post creation
            // make slug for post
        }
        return $processedImages;
    }
}
