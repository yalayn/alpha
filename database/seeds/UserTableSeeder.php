<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yordin Alayn',
            'email' => 'y.alayn@gmail.com',
            'password' => bcrypt('923885'),
        ]);
    }
}
