<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Events\Image;
use App\Http\Requests\RequestBrand;
use App\Http\Requests\RequestBrandEdit;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brand;
    
    public function __construct(){
        $this->brand = new Brand();
    }

    public function index(){
        $data['brands'] = $this->brand->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.brand.index', $data);
    }

    public function brandAddPage(){
        return view('admin.pages.brand.add');
    }

    public function brandAdd(RequestBrand $request){
        $file = $request->file('image');
        $message = [];

        if (file_exists($file)) {
            $image_path = event(new Image($file));
            $request['upload_image'] = $image_path[0];
            $uploaded_brand = $this->brand->add($request);
        }

        if ($uploaded_brand) {
            $message['success'][] = "Brand Info Uploaded Successfully!";
        } else {
            $message['error'][] = "Something Wrong, Please Retry!";
        }
        return redirect()->back()->with('message', $message);
    }

    public function brandEditPage($id){
        $data['brand'] = $this->brand->where('id', $id)->first();
        return view('admin.pages.brand.edit', $data);
    }

    public function brandEdit(RequestBrandEdit $request, $id){
        $current_item = $this->brand->where('id', $id)->first();
        $request->editId = $id;
        $file = $request->file('image');
        $message = [];

        if(!empty($current_item)){

            if(file_exists($file)) {

                $image_path = event(new Image($file));
                $request['upload_image'] = $image_path[0];
                $uploaded_brand = $this->brand->edit($request, true);

                if ($uploaded_brand) {
                    $message['success'][] = "Brand Info Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }

            }elseif(!empty($request->readonly_edit_image)){

                $uploaded_brand = $this->brand->edit($request, false);

                if ($uploaded_brand) {
                    $message['success'][] = "Brand Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }
            }else{
                $message['error'][] = 'Something Wrong, Please Retry!';
            }
        }else{
            $message['error'][] = 'Something Wrong, Please Retry!';
        }

        return redirect()->back()->with('message', $message);
    }
    
    public function brandDelete($id){
        $message = [];
        $deleted_brand = $this->brand->remove($id);

        if($deleted_brand){
            $message['success'][] = "Brand Info Deleted Successfully!";
        }else{
            $message['error'][] = "Brand Info Do Not Deleted, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }

}
