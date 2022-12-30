<?php

use App\User;
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
        factory(User::class, 10)->create();
        // User::create([
        //     'name' => 'Miqueias Penha',
        //     'email' => 'miqueiaspenha@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
