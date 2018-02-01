<?php

namespace App\Http\Controllers;

use App\Events\Image;
use App\Http\Requests\RequestSpecialOffer;
use App\Http\Requests\RequestSpecialOfferEdit;
use App\SpecialOffer;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    public $offer;

    public function __construct(){
        $this->offer = new SpecialOffer();
    }

    public function index(){
        $data['offers'] = $this->offer->paginate(10);
        return view('admin.pages.offer.index', $data);
    }

    public function offerAddPage(){
        return view('admin.pages.offer.add');
    }
    public function offerAdd(RequestSpecialOffer $request){
        $file = $request->file('image');
        $message = [];

        if(file_exists($file)){
            $image_path = event(new Image($file));
            $request['upload_image'] = $image_path[0];
            $uploaded_offer = $this->offer->add($request);
        }

        if($uploaded_offer){
            $message['success'][] = "Service Uploaded Successfully!";
        }else{
            $message['error'][] = "Something Wrong, Please Retry!";
        }
        return redirect()->back()->with('message', $message);
    }

    public function offerEditPage($id){

        $data['offer'] = $this->offer->where('id', $id)->first();
        return view('admin.pages.offer.edit', $data);
    }

    public function offerEdit(RequestSpecialOfferEdit $request){
        $current_item = $this->offer->where('id', $request->editId)->first();
        $file = $request->file('image');
        $message = [];

        if(!empty($current_item)){
            if(file_exists($file)) {

                $image_path = event(new Image($file));
                $request['upload_image'] = $image_path[0];

                $uploaded_offer = $this->offer->edit($request, true);

                if ($uploaded_offer) {
                    $message['success'][] = "Special Offer Info Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }

            }elseif(!empty($request->readonly_image)){

                $uploaded_offer = $this->offer->edit($request, false);

                if ($uploaded_offer) {
                    $message['success'][] = "Special Offer Uploaded Successfully!";
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
    
    public function offerDelete($id){
        $message = [];
        $deleted_offer = $this->offer->remove($id);

        if($deleted_offer){
            $message['success'][] = "Special Offer Deleted Successfully!";
        }else{
            $message['error'][] = "Special Offer Do Not Deleted, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
