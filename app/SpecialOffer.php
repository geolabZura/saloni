<?php

namespace App;

use App\Events\Delete;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $table='special_offer';

    protected $fillable = [
        'image', 'title', 'description', 'created_at', 'updated_at'
    ];

    public function add($request){

        $upload_offer = $this->create([
            'image'=>$request->upload_image,
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        if($upload_offer){
            return true;
        }else{
            return false;
        }
    }

    public function edit($request, $response){
        $current_item = $this->where('id', $request->editId)->first();

        if($response) {
            $upload_offer= $current_item->update([
                'image'=>$request->upload_image,
                'title' => $request->editTitle,
                'description'=>$request->editDescription
            ]);
        }
        else{
            $upload_offer = $current_item->update([
                'title' => $request->editTitle,
                'description'=>$request->editDescription
            ]);
        }

        if($upload_offer){
            return true;
        }else{
            return false;
        }
    }

    public function remove($id){
        $deletable_offer = $this->find($id);

        if(!is_null($deletable_offer)){
            event(new Delete($deletable_offer->image));
            $deletable_offer->delete();

            return true;
        }

        return false;
    }
}
