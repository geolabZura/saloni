<?php

namespace App\Http\Controllers;

use App\Events\Image;
use App\Gallery;
use App\Http\Requests\RequestImageUpload;
use Illuminate\Http\Request;
use function view;

class GalleryController extends Controller
{
    public $gallery;
    
    public function __construct(){
        $this->gallery = new Gallery();
    }

    public function index(){
        return view('admin.pages.gallery.index');
    }

    public function galleryAddPage(){
        return view('admin.pages.gallery.add');
    }

    public function galleryAdd(RequestImageUpload $request){
        $file = $request->file('image');
        $message = [];

        if(file_exists($file)){
            $image_path = event(new Image($file));
            $request['upload_image'] = $image_path[0];
            $uploaded_gallery = $this->gallery->add($request);
        }

        if($uploaded_gallery){
            $message['success'][] = "Image Uploade Successfully!";
        }else{
            $message['error'][] = "Something Wrong, Please Retry!";
        }
        return redirect()->back()->with('message', $message);
    }
}
