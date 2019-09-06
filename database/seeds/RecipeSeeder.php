<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    protected static $to_be_inserted = [
        ['name' => 'tartiflette'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach( self::$to_be_inserted as $entry ) {
            DB::table('recipe')->insert([
                'name' => $entry['name'],
            ]);
        }
    }
}
