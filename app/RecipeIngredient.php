<?php

namespace App;

use Khwadj\Eloquent\Model;

/**
 * Class RecipeIngredient
 * @package App
 *
 * @property int $recipe_ingredient_id
 * @property int $fk_recette_id
 * @property int $fk_ingredient_id
 */
class RecipeIngredient extends Model
{
    protected $table = 'recipe_ingredient';

    protected $primaryKey = 'recipe_ingredient_id';

    protected $guarded = [];

    public $timestamps = FALSE;

    public function recipe()
    {
        return $this->belongsTo('App\Recipe', 'fk_recipe_id');
    }

    public function ingredient()
    {
        return $this->belongsTo('App\Ingredient', 'fk_ingredient_id');
    }
}
