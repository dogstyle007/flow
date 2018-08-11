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
        App\User::create([
            'firstname' => 'Samuel',
            'lastname' => 'Ampofo',
            'approved' => 1,
            'email' => 'nanakay101@ymail.com',
            'username' => 'nanakay101',
            'phone' => '0240148282',
            'employerName' => 'Johnbosco',
            'designation' => 'A1',
            'yearOfCompletion' => '2012',
            'mStatus' => 'single',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,',
            'payment' => '500',
            'region' => 'Greater Accra',
            'address' => 'Atico (Around Bubuashie) Greater Accra',
            'avatar' => 'default.jpg',
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'linkedin' => 'www.linkedin.com',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'firstname' => 'Johnbosco',
            'lastname' => 'Benedict',
            'approved' => 1,
            'email' => '4kidstv007@gmail.com',
            'username' => 'johnboscoville',
            'phone' => '0236820561',
            'employerName' => 'Johnbosco',
            'designation' => 'A1',
            'yearOfCompletion' => '2018',
            'mStatus' => 'single',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,',
            'payment' => '1000',
            'region' => 'Greater Accra',
            'address' => 'Foster home, Adenta',
            'avatar' => 'default.jpg',
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'linkedin' => 'www.linkedin.com',
            'password' => bcrypt('password')
        ]);
    }
}
