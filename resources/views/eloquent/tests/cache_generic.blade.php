@php
    startDbWatch();
    /** @var \App\Ingredient $ingredient */
    $ingredient = \App\Ingredient::find(1);
    \App\Ingredient::cacheSet('someKey', $ingredient);
    $ingredient_from_cache = \App\Ingredient::cacheGet('someKey');
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::find(1);<br>
            \App\Ingredient::cacheSet('someKey', $ingredient);<br>
            $ingredient_from_cache = \App\Ingredient::cacheGet('someKey');
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient_from_cache instanceof \Khwadj\Eloquent\Model, '$ingredient_from_cache should be of class \Khwadj\Eloquent\Model') }}</li>
                <li>{{ assertTrue($ingredient->ingredient_id === $ingredient_from_cache->ingredient_id, '$ingredient_from_cache and $ingredient should have the same key') }}</li>
                <li>{{ assertTrue($ingredient === $ingredient_from_cache, '$ingredient_from_cache and $ingredient should be the same object') }}</li>
            </ul>
        </div>

        <div class="results">
            {{ testStats() }}
        </div>

    </div>
</div>
