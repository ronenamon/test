<?php
/**
 * Created by PhpStorm.
 * User: ronen
 * Date: 28/04/2018
 * Time: 12:32
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileUploadController extends Controller
{

    public function upload(Request $request)
    {
        if($request->hasFile('file_upload')){

            $file = $request->file('file_upload');
            $filename = $file->getClientOriginalName();
            echo $file;
            echo "\n".$filename . "\n";
            echo  public_path().'/uploads/';

            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);
        }
    }
}