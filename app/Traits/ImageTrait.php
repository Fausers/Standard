<?php

namespace App\Traits;

use Intervention\Image\Facades\Image;

class ImageTrait
{
    /**
     * Get the Ip Address of the user.
     *
     * @return string
     */
    public function uploadIMage($image,$dimensions,$name,$folder = 'other')
    {
        $fit = explode(',',$dimensions);
        $path = 'img/'.$folder;
        if(!file_exists($path))
            mkdir($path, 0777,true);

        $front = Image::make($image)->fit($fit[0],$fit[1])->save($path.'/'.$name.'.webp');

        return $front->basePath();
    }

    public function uploadPlaneImage($image,$name,$folder = 'other')
    {
        $uploaded = [];

        $path = 'img/'.$folder;
        if(!file_exists($path))
            mkdir($path, 0777,true);

        $new_image = Image::make($image);

        $new_image->resize(1000, null, function($constraint) {
            $constraint->aspectRatio();
        })->save($path.'/'.$name.'_hd.webp');

        $uploaded['image'] = $new_image->basePath();

        $new_image->resize(400, null, function($constraint) {
            $constraint->aspectRatio();
        })->save($path.'/'.$name.'_thumb.webp');

        $uploaded['thumb'] = $new_image->basePath();

        $uploaded['portrait'] = $new_image->width() > $new_image->height() ? 0 : 1 ;

        return $uploaded;
    }

    function cleanString($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }

}
