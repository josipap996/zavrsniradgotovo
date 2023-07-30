<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    static function imageUpload($image, $folderPath)
    {
        $file = $image;
        $extension = $file->getClientOriginalExtension();
        $fileName =  date('Y-m-d-H-i-s-U') . rand(123, 346) . '.' . $extension;
        $file->move('frontend/img' . $folderPath, $fileName);
        $filePath = $folderPath . $fileName;
        return $fileName;
    }

    static function deleteImage($folderPath, $image)
    {
        if (file_exists(public_path() . '/frontend/img/' . $folderPath . '' . $image)) {
            unlink(public_path() . '/frontend/img/' . $folderPath . '' . $image);
        }
    }

}
