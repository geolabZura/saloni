<?php

namespace App;

use App\Events\Delete;
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

    public function remove($id){
        $deletable_gallery_image = $this->find($id);

        if(!is_null($deletable_gallery_image)){
            event(new Delete($deletable_gallery_image->image));
            $deletable_gallery_image->delete();

            return true;
        }

        return false;
    }
}
