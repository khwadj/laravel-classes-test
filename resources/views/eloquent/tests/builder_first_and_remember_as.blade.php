@php
    testStart();
    $ingredient = \App\Ingredient::whereIn('ingredient_id', [1])->first_and_remember_as('one');
    $ingredient2 = \App\Ingredient::cacheGet('one');
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::whereIn('ingredient_id', [1])->first_and_remember_as('one');
            $ingredient2 = \App\Ingredient::cacheGet('one');
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient2 instanceof \App\Ingredient, '$ingredient2 should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient === $ingredient2, '$ingredient and $ingredient2 should be the same object') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
