@extends('layouts/default')

@section('content')

    <h1 class="col-12">Eloquent tests</h1>

    <div class="col-12">
        <ul>
            <li>
                <a href=" {{ route('eloquent_collection') }}">
                    Collection tests
                </a>
            </li>
            <li>
                <a href=" {{ route('eloquent_cache') }}">
                    Cache tests
                </a>
            </li>
            <li>
                <a href=" {{ route('eloquent_model') }}">
                    Model tests
                </a>
            </li>
            <li>
                <a href=" {{ route('eloquent_builder') }}">
                    Builder tests
                </a>
            </li>
        </ul>
    </div>

@endsection