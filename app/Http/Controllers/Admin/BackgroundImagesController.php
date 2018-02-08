<?php

namespace App\Http\Controllers;

use App\BackgroundImage;
use App\Events\Image;
use App\Http\Requests\RequestBackgroundImage;
use App\Listeners\UploadImage;
use Illuminate\Http\Request;

class BackgroundImagesController extends Controller
{
    public $background_image;

    public function __construct(){
        $this->background_image = new BackgroundImage();
    }

    public function index(){
        $data['images'] = $this->background_image->all();
        return view('admin.pages.image.index', $data);
    }

    public function imageEdit(RequestBackgroundImage $request){

        $filenames = ['home_page_image','body_image','brand_small_image' ,'brand_large_image'];
        $message = [];

        foreach ($filenames as $files){

            $current_file = $request->file($files);
            $file_input_name = 'readonly_'.$files;
            $current_file_name = file_exists($current_file) ? $current_file->getClientOriginalName() :'';
            $file_name_array = explode("\\",$request->$file_input_name);
            $file_name = end($file_name_array);

            if(!empty($current_file_name) and !empty($file_name)) {
                if ($current_file_name == $file_name) {

                    $file_upload_response = event(new Image($current_file))[0];
                    $file_name_write_base_responce = $this->background_image->edit($files, $file_upload_response);

                    if($file_name_write_base_responce){
                        $message['success'][] = 'File Uploaded Successfully!';
                    }else{
                        $message['error'][] = 'Something Wrong, Please Connect Site Administrator!';
                    }
                }
            }
        }

        return redirect()->back()->with('message', $message);
    }
}
