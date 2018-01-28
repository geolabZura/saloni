<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'title', 'description', 'text', 'created_at', 'update_at'
    ];

    public function edit($request){
        $about_ud_info = $this->where('id',1)->first();

        if(is_null($request->title)){
            $request->title = '';
        }
        if(is_null($request->description)){
            $request->description = '';
        }
        if(is_null($request->text)){
            $request->text = '';
        }

        if(!empty($about_ud_info)){
            $upadet_info = $about_ud_info->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'text'=>$request->text
            ]);
        }else{
            $upadet_info = $this->create([
                'title'=>$request->title,
                'description'=>$request->description,
                'text'=>$request->text
            ]);
        }

        if($upadet_info){
            return true;
        }else{
            return false;
        }
    }
}
