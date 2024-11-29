<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
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
        // var_dump($user);
        // die();

        // Send email with the reset link
        $resetLink = base_url("/auth/reset-password/$resetToken");
        $message = "Click the link below to reset your password:\n\n$resetLink";

        // $emailService = \Config\Services::email();
        // $emailService->setTo($email);
        // $emailService->setSubject('Password Reset Request');
        // $emailService->setMessage($message);
        // $emailService->send();

        // Send reset link via email               
        $emailService = \Config\Services::email();               
        $emailService->setTo($email);
        // var_dump($email);
        // die();
        $emailService->setFrom('zakariaaitballouk2018@gmail.com', 'CodeIgniter reset');$emailService->setSubject('Password Reset Request');
        $emailService->setMessage("Click the link to reset your password: $resetLink");

        if ($emailService->send()) {                   
            return  redirect()->back()->with('error', 'Password reset link has been sent to your email');
        } else {                   
            return  redirect()->back()->with('error', 'There was an issue sending the email.');
        }    

        // return redirect()->back()->with('success', 'Reset link sent to your email.');
    }

    public function resetPassword($token = null)
{
    $userModel = new UserModel();

    // Validate the token
    $user = $userModel->where('reset_token', $token)->first();

    if (!$user) {
        return redirect()->to('/auth/forgot-password')->with('error', 'Invalid or expired reset token.');
    }

    return view('auth/reset_password', ['token' => $token]);
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
        'password' => $newPassword, // Not hashed per your requirement
        'reset_token' => null,
    ]);

    return redirect()->to('/auth/login')->with('success', 'Password changed successfully.');
}

}
