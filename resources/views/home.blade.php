@extends('layouts/default')

@section('content')

    <ul>
        <li>
            <a href=" {{ route('eloquent_index') }}">
                Eloquent tests
            </a>
        </li>
    </ul>

@endsection