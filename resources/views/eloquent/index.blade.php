@extends('layouts/default')

@section('content')

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
    </ul>

@endsection