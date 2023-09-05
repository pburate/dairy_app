<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(auth()->loggedIn())
        {
        return view('index');
        }
        else
        {
            return redirect()->to('/login');
        }
    }


    
}
