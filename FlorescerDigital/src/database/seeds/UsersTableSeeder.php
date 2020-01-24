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
        factory(\App\User::class, 1)->state('admin')->create([
            'name' => 'erick',
            'email'=> 'erickcristhian123@gmail.com',
            'telefone' => '988456544',
            'instagram' => 'fsbjfsjk'
        ]);

        factory(\App\User::class, 1)->state('user')->create([
            'name' => 'erick2',
            'email'=> 'erick123cristhian@gmail.com',
            'telefone' => '988456544',
            'instagram' => 'fsbjfsjk'
        ]);
        factory(\App\User::class, 3)->state('users')->create();
    }
}
