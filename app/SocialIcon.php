<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function is_null;

class SocialIcon extends Model
{
    protected $table = 'social_icon';

    protected $fillable = [
        'site_name','link'
    ];

    public function updateLink($id, $link){
        $object = $this->where('id', $id)->first();

        if(!is_null($object)){
            if(empty($link)){
                $object->update([
                    'link'=>''
                ]);
            }else {
                $object->update([
                    'link' => $link
                ]);
            }
        }
    }
}
