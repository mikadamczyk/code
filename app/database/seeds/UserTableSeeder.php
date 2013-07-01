<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'nick' => 'user1',
            'active' => '1',
            'password' => Hash::make('user1')
        ));
        User::create(array(
            'nick' => 'user2',
            'active' => '1',
            'password' => Hash::make('user2')
        ));
    }
}