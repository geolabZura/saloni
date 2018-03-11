<?php

namespace App;

use App\Events\Delete;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    
    protected $fillable = [
        'image', 'title', 'link', 'description', 'created_at', 'update_at'
    ];

    public function add($request){
        $upload_brand = $this->create([
            'image'=>$request->upload_image,
            'title'=>$request->title,
            'link'=>$request->link,
            'description'=>$request->description
        ]);

        if($upload_brand){
            return true;
        }else{
            return false;
        }
    }

    public function edit($request, $response){
        $current_item = $this->where('id', $request->editId)->first();

        if($response) {
            $upload_brand= $current_item->update([
                'image'=>$request->upload_image,
                'title' => $request->editTitle,
                'link' => $request->editLink,
                'description'=>$request->description
            ]);
        }
        else{
            $upload_brand = $current_item->update([
                'title' => $request->editTitle,
                'link' => $request->editLink,
                'description'=>$request->description
            ]);
        }

        if($upload_brand){
            return true;
        }else{
            return false;
        }
    }

    public function remove($id){
        $deletable_staff = $this->find($id);

        if(!is_null($deletable_staff)){
            event(new Delete($deletable_staff->image));
            $deletable_staff->delete();

            return true;
        }

        return false;
    }
}
