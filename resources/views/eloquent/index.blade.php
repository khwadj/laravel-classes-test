@extends('layouts/default')

@section('content')

    <ul>
        <li>
            <a href=" {{ route('eloquent_model') }}">
                Model tests
            </a>
        </li>
    </ul>

@endsection