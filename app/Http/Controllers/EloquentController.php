<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloquentController extends Controller
{
    function index()
    {
        return view('eloquent/index', []);
    }

    function model()
    {
        return view('eloquent/model', []);
    }

    function collection()
    {
        return view('eloquent/collection', []);
    }
}
