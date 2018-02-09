<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\BackgroundImage;
use App\Service;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    protected $background_images;
    protected $about_us;
    protected $service;

    public function __construct(){
        $this->background_images = new BackgroundImage();
        $this->about_us = new AboutUs();
        $this->service = new Service();
    }
    public function index(){
        $background_images = $this->background_images->all();
        $data['services'] = $this->service->all();
        $service_count = 1;
        $service_index_split_count = 0;

        foreach ($background_images as $images) {
            $data[$images->position_name] = $images->image;
        }
//
//        foreach ($services as $service){
//            if($service_count>3){
//                $service_index_split_count++;
//                $service_count=1;
//                $data['services'][$service_index_split_count][] = $service;
//            }else{
//                $service_count++;
//                $data['services'][$service_index_split_count][] = $service;
//            }
//        }
        $data['about_us'] = $this->about_us->first();

        return view('index', $data);
    }

}
