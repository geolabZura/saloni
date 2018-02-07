<?php

use Illuminate\Database\Seeder;

class SocialIcons extends Seeder
{
    public $sites_name = ['facebook','instagram', 'vk'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->sites_name as $site) {
            $exist_row = \Illuminate\Support\Facades\DB::table('social_icon')->where('site_name', $site)->first();
            if(empty($exist_row)) {
                \Illuminate\Support\Facades\DB::table('social_icon')->insert([
                    'site_name' => $site,
                    'link' => '',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]);
            }
        }
    }
}
