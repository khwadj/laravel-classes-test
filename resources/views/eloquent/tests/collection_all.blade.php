@php
    testStart();
    $ingredients = \App\Ingredient::all();
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredients = \App\Ingredient::all();
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredients instanceof \Illuminate\Support\Collection, '$ingredients should be of class \Illuminate\Support\Collection') }}</li>
                <li>{{ assertTrue($ingredients instanceof \Illuminate\Database\Eloquent\Collection, '$ingredients should be of class \Illuminate\Database\Eloquent\Collection') }}</li>
                <li>{{ assertTrue($ingredients instanceof \Khwadj\Eloquent\Collection, '$ingredients should be of class \Khwadj\Eloquent\Collection') }}</li>
                <li>{{ assertTrue(!$ingredients instanceof \Illuminate\Support\LazyCollection, '$ingredients should not be of class \Illuminate\Support\LazyCollection') }}</li>
                <li>{{ assertTrue($ingredients->count() === 5, '$ingredients should have 5 items') }}</li>
                <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 1') }}</li>
                <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 2') }}</li>
                <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 3') }}</li>
                <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 4') }}</li>
                <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 5') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
