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

    </div>


@endsection