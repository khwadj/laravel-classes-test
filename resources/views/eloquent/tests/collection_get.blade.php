@php
    testStart();
    $ingredients = \App\Ingredient::all();
    $ingredient = $ingredients->get(1);
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = $ingredients->get(1);
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient !== NULL, '$ingredients should not be null') }}</li>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredients should not be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient->ingredient_id === 1, '$ingredients\'s id (ingredient_id) should be 1') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
