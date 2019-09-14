@extends('layouts/default')

@section('content')

    <div class="col-12">

        <h1>Eloquent/Collection</h1>

        <div class="card">
            <div class="card-header">
                <h2>Collection</h2>
            </div>
            <div class="card-body">

                @php
                    $ingredients = \App\Ingredient::all();
                @endphp

                <div class="">
                    $ingredients = \App\Ingredient::all();
                </div>

                <ul>
                    <li>{{ assertTrue($ingredients instanceof \Illuminate\Support\Collection, '$ingredients should be of class \Illuminate\Support\Collectiont') }}</li>
                    <li>{{ assertTrue($ingredients instanceof \Illuminate\Database\Eloquent\Collection, '$ingredients should be of class \Illuminate\Database\Eloquent\Collection') }}</li>
                    <li>{{ assertTrue($ingredients instanceof \Khwadj\Eloquent\Collection, '$ingredients should be of class \Khwadj\Eloquent\Collection') }}</li>
                    <li>{{ assertTrue(!$ingredients instanceof \Illuminate\Support\LazyCollection, '$ingredients should not be of class \Illuminate\Support\LazyCollection') }}</li>
                </ul>

                <div class="">
                    $ingredients = \App\Ingredient::all();
                </div>

                <ul>
                    <li>{{ assertTrue($ingredients->count() === 5, '$ingredients should have an 5 items') }}</li>
                    <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 1') }}</li>
                    <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 2') }}</li>
                    <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 3') }}</li>
                    <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 4') }}</li>
                    <li>{{ assertTrue($ingredients->has(1), '$ingredients should have an item at key 5') }}</li>
                </ul>

                @php
                    $ingredient = $ingredients->get(1);
                @endphp
                <div class="">
                    $ingredient = $ingredients->get(1);
                </div>

                <ul>
                    <li>{{ assertTrue($ingredient !== NULL, '$ingredients should not be null') }}</li>
                    <li>{{ assertTrue($ingredient instanceof \App\Ingredient, '$ingredients should not be of class \App\Ingredient') }}</li>
                    <li>{{ assertTrue($ingredient->ingredient_id === 1, '$ingredients\'s id (ingredient_id) should be 1') }}</li>
                </ul>

            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Lazy Collection (Laravel >=  6.0) </h2>
            </div>
            <div class="card-body">

                @php
                    $ingredients = \App\Ingredient::cursor();
                @endphp
                <div class="">
                    $ingredients = \App\Ingredient::cursor();
                </div>

                <ul>
                    <li>{{ assertTrue($ingredients instanceof \Illuminate\Support\LazyCollection, '$ingredients should be of class \Illuminate\Support\LazyCollection') }}</li>
                </ul>

            </div>
        </div>

    </div>


@endsection