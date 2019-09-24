<?php

namespace App;

use Khwadj\Eloquent\Model;

/**
 * Class Ingredient
 * @package App
 *
 * @property int $ingredient_id
 * @property int $name
 *
 * @property RecipeIngredient recipe_ingredients
 */
class Ingredient extends Model
{
    protected $table = 'ingredient';

    protected $primaryKey = 'ingredient_id';

    protected $guarded = [];

    public $timestamps = FALSE;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipe_ingredients()
    {
        return $this->hasMany('App\RecipeIngredient', 'fk_ingredient_id');
    }

    //todo : has many recettes
}
