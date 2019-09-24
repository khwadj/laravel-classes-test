@php
    testStart();
    $ingredient = \App\Ingredient::find_or_recall(1);
    $r_i = $ingredient->recipe_ingredients();
    $r_i_result = $r_i->get();
@endphp

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            $ingredient = \App\Ingredient::find_or_recall(1);<br>
            $r_i = $ingredient->recipe_ingredients();<br>
            $r_i_result = $r_i->get();
        </div>

        <div class="tests">
            <ul>
                <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                <li>{{ assertTrue($r_i instanceof \Illuminate\Database\Eloquent\Relations\HasMany, '$r_i should be of class \Illuminate\Database\Eloquent\Relations\HasMany') }}</li>
                <li>{{ assertTrue($r_i_result instanceof \Khwadj\Eloquent\Collection, '$r_i_result should be of class \Khwadj\Eloquent\Collection') }}</li>
            </ul>
        </div>

    </div>
    <div class="card-footer">
        {{ testStats() }}
    </div>
</div>
