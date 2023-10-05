<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $title = 'Main Page';
        $subtitle = '<em>Subtitle</em>';
        $users = ['Tom', 'Bill', 'Mike'];

        return view('index', compact('title', 'subtitle', 'users'));
    }

    function contacts()
    {
        return view('contacts');
    }
}
