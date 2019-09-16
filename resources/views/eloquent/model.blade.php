@extends('layouts/default')

@section('content')

    <div class="col-12">

        <h1>Eloquent/Model</h1>

        <div class="card">
            <div class="card-header">
                <h2>Generic</h2>
            </div>
            <div class="card-body">

                @php
                    $ingredient = \App\Ingredient::find(1);
                @endphp

                <div class="">
                    $ingredient = \App\Ingredient::find(1);
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient instanceof \Khwadj\Eloquent\Model, '$ingredient should be of class \Khwadj\Eloquent\Model') }}</li>
                </ul>


            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Cache</h2>
            </div>
            <div class="card-body">

                @php
                    /** @var \App\Ingredient $ingredient */
                    $ingredient = \App\Ingredient::find(1);
                    $key = $ingredient->getLocalCacheKey();
                @endphp

                <div class="">
                    $ingredient = \App\Ingredient::find(1);<br>
                    $key = $ingredient->getLocalCacheKey();
                </div>

                <ul>
                    <li>{{ assertTrue($key, '$key should not be null or empty') }}</li>
                </ul>


            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Find and remember</h2>
            </div>
            <div class="card-body">

                @php
                    /** @var \App\Ingredient $ingredient */
                    $ingredient = \App\Ingredient::find_and_remember(1);
                    $ingredient2 = \App\Ingredient::cacheGet(\App\Ingredient::getStaticLocalCacheKeyForId(1));
                @endphp

                <div class="">
                    $ingredient = \App\Ingredient::find_and_remember(1);<br>
                    $ingredient2 = \App\Ingredient::cacheGet(\App\Ingredient::getStaticLocalCacheKeyForId(1));
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 instanceof \App\Ingredient, '$ingredient2 should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 === $ingredient, '$ingredient and $ingredient2 should be the same object') }}</li>

                </ul>


            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Find and remember as</h2>
            </div>
            <div class="card-body">

                @php
                    /** @var \App\Ingredient $ingredient */
                    $key = 'banana';
                    $ingredient = \App\Ingredient::find_and_remember_as(1, $key);
                    $ingredient2 = \App\Ingredient::cacheGet($key);
                @endphp

                <div class="">
                    $key = 'banana';<br>
                    $ingredient = \App\Ingredient::find_and_remember_as(1, $key);<br>
                    $ingredient2 = \App\Ingredient::cacheGet($key);
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 instanceof \App\Ingredient, '$ingredient2 should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 === $ingredient, '$ingredient and $ingredient2 should be the same object') }}</li>

                </ul>


            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Find or recall</h2>
            </div>
            <div class="card-body">

                @php
                    /** @var \App\Ingredient $ingredient */
                    $ingredient = \App\Ingredient::find_or_recall(1);
                    $ingredient2 = \App\Ingredient::find_or_recall(1);
                @endphp

                <div class="">
                    $ingredient = \App\Ingredient::find_or_recall(1);<br>
                    $ingredient2 = \App\Ingredient::find_or_recall(1);
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredient should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 instanceof \App\Ingredient, '$ingredient2 should be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient2 === $ingredient, '$ingredient and $ingredient2 should be the same object') }}</li>

                </ul>


            </div>
        </div>


    </div>


@endsection