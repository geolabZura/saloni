<?php

namespace App;

use App\Http\Requests\RequestImageUpload;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'image', 'created_at', 'updated_at'
    ];

    public function add($request){
        $upload_image = $this->create([
            'image'=>$request->upload_image,
            
            ]);

        if($upload_image){
            return true;
        }else{
            return false;
        }
    }

}
