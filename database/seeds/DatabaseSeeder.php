<?php

use App\User;
use App\Admin;
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
        $user_id = User::create([
            'email' => 'saba72@live.com',
            'username' => 'thesaba',
            'password' => bcrypt('gbay.dev'),
            'isAdmin' => '1'
        ])->id;

        Admin::create([
            'user_id' => $user_id,
            'fname' => 'საბა',
            'lname' => 'აბესაძე',
            'mobile_number' => '599426341'
        ]);
    }
}