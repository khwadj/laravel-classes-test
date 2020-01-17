@extends('layouts/default')

@section('content')

    <div class="col-12">
        <h1>Eloquent/builder</h1>

        @include('/eloquent/tests/builder_get_and_remember_as', ['title' => 'Get and remember as'])

        @include('/eloquent/tests/builder_first_and_remember_as', ['title' => 'Get and remember as'])

        @include('/eloquent/tests/builder_first_and_remember', ['title' => 'Get and remember as'])
    </div>



@endsection