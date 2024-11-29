<?php

namespace App\Controllers;

use App\Models\UserModel;
class ForgotPassword extends BaseController
{
    public function index(): string
    {
        return view('forgotpassword');
    }


}