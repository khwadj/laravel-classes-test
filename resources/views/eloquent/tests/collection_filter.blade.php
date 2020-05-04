@php
    testStart();
    $ingredients  = \App\Ingredient::all();
    $ingredients2 = $ingredients->filter(function(\App\Ingredient $ingredient) {
        return $ingredient->name === 'patates' || $ingredient->name === 'oignons';
    });
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredients = \App\Ingredient::all();<br>
            $ingredients2 = $ingredients->filter(function(\App\Ingredient $ingredient) { <br>
                return $ingredient->name === 'patates' || 'oignons'; <br>
            });
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredients instanceof \Khwadj\Eloquent\Collection, '$ingredients should be of class \Khwadj\Eloquent\Collection') }}</li>
                <li>{{ assertTrue($ingredients2 instanceof \Khwadj\Eloquent\Collection, '$ingredients2 should be of class \Khwadj\Eloquent\Collection') }}</li>
                <li>{{ assertTrue($ingredients2->count() === 2, '$ingredients2 should have 2 items') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
