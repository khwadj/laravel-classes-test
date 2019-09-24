@extends('layouts/default')

@section('content')

    <div class="col-12">
        <h1>Eloquent/Model</h1>

        @include('/eloquent/tests/model_generic', ['title' => 'Generic'])
        @include('/eloquent/tests/model_cache', ['title' => 'Cache'])
        @include('/eloquent/tests/model_find_and_remember', ['title' => 'Find and remember'])
        @include('/eloquent/tests/model_find_and_remember_as', ['title' => 'Find and remember as'])
        @include('/eloquent/tests/model_find_or_recall', ['title' => 'Find or recall'])
        @include('/eloquent/tests/model_relationships', ['title' => 'Relationships'])
        @include('/eloquent/tests/model_relationships2', ['title' => 'Relationships 2'])
    </div>

@endsection