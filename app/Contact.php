<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'city', 'telephone', 'mail', 'work_from', 'work_to'
    ];

    public function services(){
        return $this->belongsToMany(Service::class,
            'contact_service',
            'contact_id',
            'service_id'
            );
    }
}
