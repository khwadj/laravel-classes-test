@extends('layouts/default')

@section('content')

    <div class="col-12">
        <h1>Eloquent/Collection</h1>

        @include('/eloquent/tests/collection_all', ['title' => 'model::all()'])
        @include('/eloquent/tests/collection_get', ['title' => 'collection->get()'])
        @include('/eloquent/tests/collection_filter', ['title' => 'collection->filter()'])
        @include('/eloquent/tests/collection_sort', ['title' => 'collection->sort()'])
    </div>

@endsection