<?php

namespace App\Http\Controllers;

use App\SpecialOffer;
use Illuminate\Http\Request;

class SpecialOfferPageController extends Controller
{
    protected $offer;

    public function __construct(){
        $this->offer = new SpecialOffer();
    }

    public function index()
    {
        $data['special_offers'] = $this->offer->orderBy('created_at', 'desc')->get();
        return view('site.singlespecialoffer', $data);
    }

    public function singleSpecialOffer($id){
        $data['special_offer'] = $this->offer->where('id', $id)->first();
        return view('site.singlespecialoffer', $data);
    }
}
