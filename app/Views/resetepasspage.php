<form method="post" action="<?= base_url('/auth/process-forgot-password') ?>">
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    <button type="submit">Reset Password</button>
</form>
