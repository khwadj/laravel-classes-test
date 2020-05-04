@php
    testStart();
    $cache_items_at_start   = \Khwadj\Eloquent\MemoryRuntimeCache::count();
    /** @var \App\Ingredient $ingredient */
    $ingredient             = \App\Ingredient::find(1);
    \App\Ingredient::cacheSet('someKey', $ingredient);
    $ingredient_from_cache  = \App\Ingredient::cacheGet('someKey');
    $cache_items_at_end     = \Khwadj\Eloquent\MemoryRuntimeCache::count();
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $cache_items_at_start = \Khwadj\Eloquent\MemoryRuntimeCache::count();<br>
            $ingredient = \App\Ingredient::find(1);<br>
            \App\Ingredient::cacheSet('someKey', $ingredient);<br>
            $ingredient_from_cache = \App\Ingredient::cacheGet('someKey');<br>
            $cache_items_at_end = \Khwadj\Eloquent\MemoryRuntimeCache::count();
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($cache_items_at_start === 0, 'Cache at start should be empty') }}</li>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($ingredient_from_cache instanceof \Khwadj\Eloquent\Model, '$ingredient_from_cache should be of class \Khwadj\Eloquent\Model') }}</li>
                <li>{{ assertTrue($ingredient->ingredient_id === $ingredient_from_cache->ingredient_id, '$ingredient_from_cache and $ingredient should have the same key') }}</li>
                <li>{{ assertTrue($cache_items_at_end === 1, 'The cache should have exactly 1 item') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
