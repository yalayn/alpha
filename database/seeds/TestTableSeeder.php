<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => 'Test 1',
            'description' => 'Descripcion de prueba numero 1',
        ]);
    }
}
