<?php

namespace App;

use Khwadj\Eloquent\Model;

/**
 * Class Ingredient
 * @package App
 *
 * @property int $ingredient_id
 * @property int $name
 */
class Ingredient extends Model
{
    protected $table = 'ingredient';

    protected $primaryKey = 'ingredient_id';

    protected $guarded = [];

    public $timestamps = FALSE;

    public function recette_ingredient()
    {
        return $this->hasMany('App\RecipeIngredient', 'fk_ingredient_id');
    }

    //todo : has many recettes
}
