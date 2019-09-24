@extends('layouts/default')

@section('content')

    <div class="col-12">
        <h1>Eloquent/Cache</h1>

        @include('/eloquent/tests/cache_generic', ['title' => 'Generic'])
    </div>

@endsection