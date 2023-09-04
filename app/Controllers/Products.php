<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index()
    {
        if(auth()->loggedIn())
        {
        return view('index');

        }
    }
}
