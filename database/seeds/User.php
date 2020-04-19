<?php

use Illuminate\Database\Seeder;
use App\User as ModelUser;
use Carbon\Carbon;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = array(
            [
                'name' => 'admin123',
                'email' => 'admin123@gmail.com',
                'email_verified_at' =>  NULL,
                'password' => '$2y$12$euQZ0p2tuUGh/U4Ru1KLhO6ptIi32jw.qaWfAl85HIHDzax4vy0HG',
                'remember_token' => 'WdDSTkLloiS21OH1prCilARqCcwdxUtfvkzhy3IHU14LRytC7GwhQXbbuyur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        );
        ModelUser::insert($data);
    }
}

