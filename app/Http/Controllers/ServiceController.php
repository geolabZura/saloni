<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestService;
use App\Http\Requests\RequestServiceEdit;
use App\Listeners\DeleteImage;
use App\Service;
use App\ServiceCategory;
use function event;
use Illuminate\Http\Request;
use App\Events\Image;
use function redirect;
use function returnArgument;

class ServiceController extends Controller
{
    public $service;
    public $category;

    public function __construct(){
        $this->service = new Service();
        $this->category = new ServiceCategory();
    }

    public function index(){
        $data['categories'] = $this->category->all();
        $data['services'] = $this->service->paginate(10);

        return view('admin.pages.service.index', $data);
    }

    public function ServiceAdd(RequestService $request){
        $file = $request->file('image');
        $message = [];

        if(file_exists($file)){
            $image_path = event(new Image($file));
            $request['upload_image'] = $image_path[0];
            $uploaded_service = $this->service->add($request);
        }

        if($uploaded_service){
            $message['success'][] = "Service Uploaded Successfully!";
        }else{
            $message['error'][] = "Something Wrong, Please Retry!";
        }
        return redirect()->back()->with('message', $message);
    }

    public function ServiceEdit(RequestServiceEdit $request){
        $current_item = $this->service->where('id', $request->editId)->first();
        $file = $request->file('image');
        $message = [];

        if(!empty($current_item)){

            if(file_exists($file)) {

                $image_path = event(new Image($file));
                $request['upload_image'] = $image_path[0];
                $uploaded_service = $this->service->edit($request, true);

                if ($uploaded_service) {
                    $message['success'][] = "Service Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }

            }elseif(!empty($request->readonly_edit_image)){

                $uploaded_service = $this->service->edit($request, false);

                if ($uploaded_service) {
                    $message['success'][] = "Service Uploaded Successfully!";
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

    public function loadCategory($id){
        $data['categories'] = $this->category->all();
        $service = $this->service->where('id', $id)->first();

        foreach ($service->categories as $category){
            $data['selected_category'][] = $category->id;
        }

        return view('admin.pages.service.load', $data);

    }

    public function serviceDelete($id){
        $message = [];
        $deleted_service = $this->service->remove($id);

        if($deleted_service){
            $message['success'][] = "Service Deleted Successfully!";
        }else{
            $message['error'][] = "Service Do Not Deleted, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
