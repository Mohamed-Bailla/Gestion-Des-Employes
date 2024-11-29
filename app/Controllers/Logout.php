<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index(): string
    {
        return view('login/index');
        
    }


}