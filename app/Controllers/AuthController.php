<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index(){
        return view("forgot_password");
    }
    public function processForgotPassword()
    {
        $email = $this->request->getPost('email');
        $userModel = new UserModel();

        // Check if the email exists in the database
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found.');
        }

        // Generate a secure reset token
        $resetToken = bin2hex(random_bytes(16));

        // Save the reset token to the database
        $userModel->update($user['id'], ['reset_token' => $resetToken]);

        // Generate reset link
        $resetLink = base_url("/auth/reset-password/$resetToken");

        // Send email with the reset link
        $emailService = \Config\Services::email();
        $emailService->setFrom('zakariaaitballouk2018@gmail.com', 'CodeIgniter Reset');
        $emailService->setTo($email);
        $emailService->setSubject('Password Reset Request');
        $emailService->setMessage("Click the link to reset your password: <a href='$resetLink'>$resetLink</a>");

        if ($emailService->send()) {
            return redirect()->back()->with('success', 'Password reset link has been sent to your email.');
        } else {
            return redirect()->back()->with('error', 'There was an issue sending the email.');
        }
    }

    public function resetPassword($token = null)
    {
        $userModel = new UserModel();

        // Validate the token
        $user = $userModel->where('reset_token', $token)->first();

        if (!$user) {
            return redirect()->to('/auth/forgot-password')->with('error', 'Invalid or expired reset token.');
        }

        return view('reset_password', ['token' => $token]);
    }

    public function updatePassword()
    {
        $token = $this->request->getPost('token');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'Passwords do not match.');
        }

        $userModel = new UserModel();

        // Find the user by the reset token
        $user = $userModel->where('reset_token', $token)->first();

        if (!$user) {
            return redirect()->to('/auth/forgot-password')->with('error', 'Invalid or expired reset token.');
        }

        // Update the password and clear the reset token
        $userModel->update($user['id'], [
            'password' => $newPassword, // Change this to hash password for production
            'reset_token' => null,
        ]);

        return redirect()->to('/Login')->with('success', 'Password changed successfully.');
    }
}
