<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Admin',
          'email' => 'nicolas.rodriguezn@mail.udp.cl',
          'password' => 'password',
          'id_user_type' => 1,

        ])
    }
}
