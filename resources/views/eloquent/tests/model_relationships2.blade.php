@php
    testStart();
    /** @var \App\Ingredient $ingredient */
    $ingredient = \App\Ingredient::find_or_recall(1);
    $r_i = $ingredient->recipe_ingredients;
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::find_or_recall(1);<br>
            $r_i = $ingredient->recipe_ingredients;
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($r_i instanceof \Khwadj\Eloquent\Collection, '$r_i should be of class \Khwadj\Eloquent\Collection') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
