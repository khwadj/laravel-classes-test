<?php

use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    protected static $to_be_inserted = [
        ['ingredient' => 'lardons',
         'recipe'     => 'tartiflette'],
        ['ingredient'   => 'crème',
         'recipe' => 'tartiflette'],
        ['ingredient'   => 'patates',
         'recipe' => 'tartiflette'],
        ['ingredient'   => 'oignons',
         'recipe' => 'tartiflette'],
        ['ingredient'   => 'vin blanc',
         'recipe' => 'tartiflette'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach( self::$to_be_inserted as $entry ) {
            // find each
            $ingredient = \App\Ingredient::where('name', '=', $entry['ingredient'])->first();
            $recipe = \App\Recipe::where('name', '=', $entry['recipe'])->first();

            if ($ingredient && $recipe) {
                DB::table('recipe_ingredient')->insert([
                    'fk_ingredient_id' => $ingredient->ingredient_id,
                    'fk_recipe_id'     => $recipe->recipe_id,
                ]);
            }
        }
    }
}
