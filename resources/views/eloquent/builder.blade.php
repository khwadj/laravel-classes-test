@extends('layouts/default')

@section('content')

    <div class="col-12">

        <h1>Eloquent/Builder</h1>

        <div class="card">
            <div class="card-header">
                <h2>Get_and_remember_as</h2>
            </div>
            <div class="card-body">

                @php
                    $ingredients = \App\Ingredient::whereIn('ingredient_id', [1,2])->get_and_remember_as('one_and_two');
                    $ingredients2 = \App\Ingredient::cacheGet('one_and_two');
                @endphp

                <div class="">
                    $ingredients = \App\Ingredient::whereIn('ingredient_id', [1,2])->get_and_remember_as('one_and_two');<br>
                    $ingredients2 = \App\Ingredient::cacheGet('one_and_two');
                </div>

                <ul>
                    <li>{{ assertTrue($ingredients instanceof \Khwadj\Eloquent\Collection, '$ingredients should be of class \Khwadj\Eloquent\Collection') }}</li>
                    <li>{{ assertTrue($ingredients2 instanceof \Khwadj\Eloquent\Collection, '$ingredients2 should be of class \Khwadj\Eloquent\Collection') }}</li>
                    <li>{{ assertTrue($ingredients === $ingredients2, '$ingredients and $ingredients2 should be the same object') }}</li>

                </ul>

            </div>
        </div>


    </div>


@endsection