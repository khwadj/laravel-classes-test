@extends('layouts/default')

@section('content')

    <div class="col-12">
        <h1>Eloquent/Collection</h1>

        @include('/eloquent/tests/collection_all', ['title' => 'model::all()'])
        @include('/eloquent/tests/collection_get', ['title' => 'collection->get()'])
    </div>

@endsection