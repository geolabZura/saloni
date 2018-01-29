<?php

namespace App\Listeners;

use App\Events\Image;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadImage
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
     * @param Image $current_file
     * @return string
     */
    public function handle(Image $current_file)
    {
        $current_file_name = $current_file->image->getClientOriginalName();
        $uploaded_file_name = time().'.'.$current_file_name;
        $current_file->image->move(public_path('/image/'), $uploaded_file_name);

        return $uploaded_file_name;
    }
}
