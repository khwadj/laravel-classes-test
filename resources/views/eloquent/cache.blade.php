@extends('layouts/default')

@section('content')

    <div class="col-12">

        <h1>Eloquent/Cache</h1>

        <div class="card">
            <div class="card-header">
                <h2>Generic</h2>
            </div>
            <div class="card-body">

                @php
                    /** @var \App\Ingredient $ingredient */
                    $ingredient = \App\Ingredient::find(1);
                    \App\Ingredient::cacheSet('someKey', $ingredient);
                    $ingredient_from_cache = \App\Ingredient::cacheGet('someKey');
                @endphp

                <div class="">
                    $ingredient = \App\Ingredient::find(1);<br>
                    \App\Ingredient::cacheSet('someKey', $ingredient);<br>
                    $ingredient_from_cache = \App\Ingredient::cacheGet('someKey');
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient_from_cache instanceof \Khwadj\Eloquent\Model, '$ingredient_from_cache should be of class \Khwadj\Eloquent\Model') }}</li>
                    <li>{{ assertTrue($ingredient->ingredient_id === $ingredient_from_cache->ingredient_id, '$ingredient_from_cache and $ingredient should have the same key') }}</li>
                    <li>{{ assertTrue($ingredient === $ingredient_from_cache, '$ingredient_from_cache and $ingredient should be the same object') }}</li>
                </ul>


            </div>
        </div>


    </div>


@endsection