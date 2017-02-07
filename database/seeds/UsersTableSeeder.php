<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->role_id = 1;
        $user1->name = 'Jose Mathew';
        $user1->email = 'Jose@Mathew.com';
        $user1->password = bcrypt('password');

        $user1->save();
    }
}
