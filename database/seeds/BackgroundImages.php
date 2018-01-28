<?php

use Illuminate\Database\Seeder;

class BackgroundImages extends Seeder
{
    public $position_names = [
        'home_page_image',
        'body_image',
        'brand_small_image',
        'brand_large_image'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->position_names as $name) {
            \Illuminate\Support\Facades\DB::table('background_images')->insert([
                'position_name' => $name,
                'image'         => '',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ]);
        }
    }
}
