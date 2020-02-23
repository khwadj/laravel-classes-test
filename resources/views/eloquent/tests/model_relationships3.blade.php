@php
    testStart();
    /** @var \App\Ingredient $ingredient */
    $ingredient = \App\Ingredient::with('recipe_ingredients')->where('ingredient_id', '=',1)->first();
    $r_i = $ingredient->recipe_ingredients;
    $all_r_i = \App\RecipeIngredient::where('fk_ingredient_id', '=', 1)->get();
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::with('recipe_ingredients')->where('id', '=',1)->first();<br>
            $r_i = $ingredient->recipe_ingredients;<br>
            $all_r_i = \App\RecipeIngredient::all();
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($r_i instanceof \Khwadj\Eloquent\Collection, '$r_i should be of class \Khwadj\Eloquent\Collection') }}</li>
                @foreach( $all_r_i as $one_r_i )
                    <li>{{ assertTrue($ingredient->recipe_ingredients->has($one_r_i->recipe_ingredient_id), '$ingredient->recipe_ingredients have an entry of id ' . $one_r_i->recipe_ingredient_id) }}</li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
