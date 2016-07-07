<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'value' => 'Neque porro quisquam est qui dolorem ipsum',
        ]);

        DB::table('items')->insert([
            'value' => 'quia dolor sit amet, consectetur, adipisci velit...',
        ]);
    }
}
