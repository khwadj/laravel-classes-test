@php
    testStart();
    /** @var \App\Ingredient $ingredient */
    $ingredient = \App\Ingredient::find_and_remember(1);
    $ingredient2 = \App\Ingredient::cacheGet(\App\Ingredient::getStaticLocalCacheKeyForId(1));
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::find_and_remember(1);<br>
            $ingredient2 = \App\Ingredient::cacheGet(\App\Ingredient::getStaticLocalCacheKeyForId(1));
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient2 instanceof \App\Ingredient, '$ingredient2 should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient2 === $ingredient, '$ingredient and $ingredient2 should be the same object') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>