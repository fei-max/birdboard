<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'username' => 'ganesh',
            'image' => '',
            'first_name' => 'ganesh',
            'last_name' => 'khadka',
            'email' => 'ganeshkhadka46@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
