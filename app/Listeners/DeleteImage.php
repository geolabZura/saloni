<?php

namespace App\Listeners;

use App\Events\Delete;
use function file_exists;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use function public_path;
use function unlink;

class DeleteImage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Delete  $event
     * @return void
     */
    public function handle(Delete $event){
        $file_full_path = public_path('/image/').$event->image;

        if(file_exists($file_full_path)){
            unlink($file_full_path);
        }

    }
}
