<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Sokheng",
            'username' => "Sokheng",
            'email' => "heng@gmail.com",
            'phone' => "0964214277",
            'password' => bcrypt("**aa12345"),
            'status' => '1',
            'created_at' => date('Y-m-d h:m:s'),

        ]);
        DB::table('roles')->insert([
        	'name' => "administrator",
        	'display_name' => "Administrator",
        	'description' => "hello world!",
        	'created_at' => date('Y-m-d h:m:s'),
        ]);

    }
}
