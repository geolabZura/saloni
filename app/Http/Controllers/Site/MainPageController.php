<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\BackgroundImage;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    protected $background_images;
    protected $about_us;

    public function __construct(){
        $this->background_images = new BackgroundImage();
        $this->about_us = new AboutUs();
    }

    public function index(){
        $background_images = $this->background_images->all();

        foreach ($background_images as $images){
            $data[$images->position_name] = $images->image;
        }
        $data['about_us'] = $this->about_us->first();

        return view('index', $data);
    }
}
