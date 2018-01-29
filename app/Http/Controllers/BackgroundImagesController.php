<?php

namespace App\Http\Controllers;

use App\BackgroundImage;
use App\Http\Requests\RequestBackgroundImage;
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
                    $uploade_file_name = time().'.'.$current_file->getClientOriginalName();
                    $current_file->move(public_path('/image/'), $uploade_file_name);
                    $file_upload_response = $this->background_image->edit($files, public_path('/image/').$uploade_file_name);

                    if($file_upload_response){
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
