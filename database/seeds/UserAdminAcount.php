<?php

use Illuminate\Database\Seeder;

class UserAdminAcount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \Illuminate\Support\Facades\DB::table('users')->where('id', 1)->where('email','admin@mail.com')->first();
        if(empty($admin)) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
