<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SocialIcons::class);
        $this->call(BackgroundImages::class);
        $this->call(UserAdminAcount::class);
    }
}
