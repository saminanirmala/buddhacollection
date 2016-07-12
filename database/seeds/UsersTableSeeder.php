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
        \App\User::create([
            'name'=>'Samina Tuladhar',
            'username'=>'admin',
            'email'=>'samina@ekbana.com',
            'password'=>bcrypt('admin123@')
        ]);
    }
}
