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
        /*if($request->hasFile('file_upload')) {
            $data = array(
                "file_name" => $request->all()
            );
        }*/
            //print_r($data);
           /* $file = $request->file('file_upload');
            $filename = $file->getClientOriginalName();
            echo $file;
            echo "\n".$filename . "\n";
            echo  public_path().'/uploads/';*/

            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);


            /*$this->validate($request, [
                // check validtion for image or file
                'uplode_image_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            */

            // rename image name or file name
            $getimageName = time().'.'.$request->file_upload->getClientOriginalExtension();
            $request->file_upload->move(public_path('server'), $getimageName);
         /*   return back()
                ->with('success','images Has been You uploaded successfully.')
                ->with('image',$getimageName);*/




        }

}