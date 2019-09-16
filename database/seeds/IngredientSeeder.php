<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    protected static $to_be_inserted = [
        ['name' => 'lardons'],
        ['name' => 'crème'],
        ['name' => 'patates'],
        ['name' => 'oignons'],
        ['name' => 'vin blanc'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach( self::$to_be_inserted as $entry ) {
            DB::table('ingredient')->insert([
                'name' => $entry['name'],
            ]);
        }

    }
}
