<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class ProfileController extends Controller
{
    protected $userModel;

    public function __construct()
    {
  
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $user_id = session()->get('user_id');  
    
      
        $user = $this->userModel->getUserById($user_id);
    
     
        if ($user === null) {
        
            return redirect()->to('/profile')->with('error', 'User not found.');
        }
    
        return view('profile', ['user' => $user]);
    }
    

    public function update_profile()
    {
        $user_id = session()->get('user_id');  

        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $data = [];

    
            if ($this->request->getVar('email')) {
                $data['email'] = $this->request->getVar('email');
            }

            
            if ($this->request->getVar('password')) {
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
            }

 
            if (!empty($data)) {
            
                $this->userModel->update($user_id, $data);

                return redirect()->to('/profile')->with('message', 'Profile updated successfully!');
            } else {
                return redirect()->to('/profile')->with('error', 'No changes were made to the profile.');
            }
        } else {
      
            return redirect()->to('/profile')->with('error', 'Failed to update profile: ' . implode(', ', $validation->getErrors()));
        }
    }
}
