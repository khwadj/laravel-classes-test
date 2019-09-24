@php
    startDbWatch();
    $ingredients = \App\Ingredient::whereIn('ingredient_id', [1,2])->get_and_remember_as('one_and_two');
    $ingredients2 = \App\Ingredient::cacheGet('one_and_two');
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredients = \App\Ingredient::whereIn('ingredient_id', [1,2])->get_and_remember_as('one_and_two');<br>
            $ingredients2 = \App\Ingredient::cacheGet('one_and_two');
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredients instanceof \Khwadj\Eloquent\Collection, '$ingredients should be of class \Khwadj\Eloquent\Collection') }}</li>
                <li>{{ assertTrue($ingredients2 instanceof \Khwadj\Eloquent\Collection, '$ingredients2 should be of class \Khwadj\Eloquent\Collection') }}</li>
                <li>{{ assertTrue($ingredients === $ingredients2, '$ingredients and $ingredients2 should be the same object') }}</li>
            </ul>
        </div>

        <div class="results">
            {{ testStats() }}
        </div>

    </div>
</div>
