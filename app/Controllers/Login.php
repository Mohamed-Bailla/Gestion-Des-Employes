<?php

namespace App\Controllers;

use App\Models\UserModel; 

class login extends BaseController
{
    public function index(): string
    {
        return view('login/index');
    }

    public function verification()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if ($password === $user['password']) { 
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }

    }
}
