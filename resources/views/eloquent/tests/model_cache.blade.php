@php
    startDbWatch();
    /** @var \App\Ingredient $ingredient */
    $ingredient = \App\Ingredient::find(1);
    $key = $ingredient->getLocalCacheKey();
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::find(1);<br>
            $key = $ingredient->getLocalCacheKey();
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($key, '$key should not be null or empty') }}</li>
            </ul>
        </div>

        <div class="results">
            {{ testStats() }}
        </div>

    </div>
</div>
