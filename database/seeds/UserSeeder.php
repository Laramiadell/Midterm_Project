<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'    => 'Lara',
                'fname'    => 'Lara Mia Dell',
                'address'  => 'Cahayag, Tubigon, Bohol',
                'phone'    => '0961.1936.197',
                'email'    => 'rlaramiadell@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname'    => 'Matarlo',
                'fname'    => 'Glenn',
                'address'  => 'Cabulijan, Tubigon, Bohol',
                'phone'    => '0946.2626.936',
                'email'    => 'matarloglennl@gmail.com',
                'password' => bcrypt('passwrd123')
            ],
            [
                'lname'    => 'Cosinero',
                'fname'    => 'Joanna Marie',
                'address'  => 'Pinayagan Norte, Tubigon, Bohol',
                'phone'    => '0961.1936.197',
                'email'    => 'joannamariecosinero@gmail.com',
                'password' => bcrypt('pasword123')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
