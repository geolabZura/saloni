<?php

namespace App;

use App\Events\Delete;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'image', 'title', 'created_at', 'updated_at'
    ];

    public function categories(){
        return $this->belongsToMany(ServiceCategory::class,
            'service_category_base',
            'service_id',
            'category_id'
            );
    }

    public function contacts(){
        return $this->belongsToMany(Contact::class,
            'contact_service',
            'service_id',
            'contact_id'
        );
    }

    public function add($request){
        $upload_service = $this->create([
            'image'=>$request->upload_image,
            'title'=>$request->title
        ]);

        if($upload_service){
            $upload_service->categories()->attach($request->category);
            return true;
        }else{
            return false;
        }
    }

    public function edit($request, $response){
        $current_item = $this->where('id', $request->editId)->first();

        if($response) {
            $upload_service = $current_item->update([
                'title' => $request->editTitle,
                'image' => $request->upload_image
            ]);
        }
        else{
            $upload_service = $current_item->update([
                'title' => $request->editTitle
            ]);
        }


        if($upload_service){
            $current_item->categories()->detach();
            $current_item->categories()->attach($request->category);
            return true;
        }else{
            return false;
        }
    }

    public function remove($id){
        $deletable_service = $this->find($id);

        if(!is_null($deletable_service)){
            event(new Delete($deletable_service->image));
            $deletable_service->delete();

            return true;
        }

        return false;
    }
}
