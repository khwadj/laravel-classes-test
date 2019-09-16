<?php

namespace App;

use Khwadj\Eloquent\Model;

/**
 * Class Recipe
 * @package App
 *
 * @property int    $recipe_id
 * @property string $name
 */
class Recipe extends Model
{
    protected $table = 'recipe';

    protected $primaryKey = 'recipe_id';

    protected $guarded = [];

    public $timestamps = FALSE;

    public function recette_ingredient()
    {
        return $this->hasMany('App\RecipeIngredient', 'fk_recipe_id');
    }
}
