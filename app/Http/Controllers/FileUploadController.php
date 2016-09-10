<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    public function upload()
    {
        $fileInputFieldName = "file";
        // getting all of the post data
        $file = array($fileInputFieldName => Input::file($fileInputFieldName));

        if (Input::file($fileInputFieldName) !== null && Input::file($fileInputFieldName)->isValid()) {
            $extension = Input::file($fileInputFieldName)->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Storage::disk('files')->put($fileName, File::get($file[$fileInputFieldName]));

            return response($fileName, 200);
        }
        else {
            // sending back with error message.
            return response("The uploaded file is not valid.", 422);
        }

    }
}
