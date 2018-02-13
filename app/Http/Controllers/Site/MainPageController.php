<?php

namespace App\Http\Controllers;

use App\AboutStaff;
use App\AboutUs;
use App\BackgroundImage;
use App\Brand;
use App\Contact;
use App\Gallery;
use App\Service;
use App\SpecialOffer;
use App\Staff;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    protected $background_images;
    protected $about_us;
    protected $service;
    protected $about_staff;
    protected $staff;
    protected $offer;
    protected $brand;
    protected $gallery;
    protected $contact;

    public function __construct(){
        $this->background_images = new BackgroundImage();
        $this->about_us = new AboutUs();
        $this->service = new Service();
        $this->about_staff = new AboutStaff();
        $this->staff = new Staff();
        $this->offer = new SpecialOffer();
        $this->brand = new Brand();
        $this->gallery = new Gallery();
        $this->contact = new Contact();
    }

    public function index(){
        $background_images = $this->background_images->orderBy('created_at', 'desc')->get();

        foreach ($background_images as $images) {
            $data[$images->position_name] = $images->image;
        }

        $data['services'] = $this->service->orderBy('created_at', 'desc')->get();
//        dd($data['services']);
        $data['staffs'] = $this->staff->orderBy('created_at', 'desc')->get();
        $data['offers'] = $this->offer->orderBy('created_at', 'desc')->limit(5)->get();
        $data['about_staff'] = $this->about_staff->first();
        $data['about_us'] = $this->about_us->first();
        $data['brands'] = $this->brand->orderBy('created_at', 'desc')->limit(5)->get();
        $data['gallery_images'] = $this->gallery->orderBy('created_at', 'desc')->limit(10)->get();
        $data['contact'] = $this->contact->first();

//        dd($data['contact']);
        return view('site.main', $data);
    }

}
