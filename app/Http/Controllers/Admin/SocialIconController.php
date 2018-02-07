<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestSocialLink;
use App\SocialIcon;
use Illuminate\Http\Request;

class SocialIconController extends Controller
{
    protected $socialIcon;

    public function __construct(){
        $this->socialIcon = new SocialIcon();
    }

    public function index(){
        $data['social_icons'] = $this->socialIcon->all();
        return view('admin.pages.social.index', $data);
    }

    public function addLinks(Request $request){
        $message = [];

        foreach ($request->all()['links'] as $key => $link){

            $id = substr($key, -1);
            $social_media_name  = substr($key, 0, -1);
            $real_site = @get_headers($link);

            if(!empty($link)) {

                if ($real_site) {

                    $this->socialIcon->updateLink((int)$id, $link);
                    $message['success'][] = ucfirst($social_media_name) . " Link Is Uploaded!";
                } else {

                    $message['error'][] = ucfirst($social_media_name) . " Link Is Not Valid!";
                }
            }else{
                $this->socialIcon->updateLink((int)$id, $link);
                $message['success'][] = ucfirst($social_media_name) . " Link Is Uploaded!";
            }
        }

        return redirect()->back()->with('message',$message);
    }
}
