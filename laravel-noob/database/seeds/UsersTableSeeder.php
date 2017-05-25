<?php

use app\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
          'nome' => 'admin',
          'email' => 'admini@admin.com',
          'cpf' => '85920220535',
          'vinculo' => 'sim',
          'password' => '123456',
          'permissao' => '1',
        ];
        User::create($admin);
    }
}
