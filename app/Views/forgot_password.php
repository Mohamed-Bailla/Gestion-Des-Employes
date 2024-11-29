<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Forgot Password</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #6c63ff, #64b5f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .forgot-password-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: linear-gradient(to right, #6c63ff, #64b5f6);
            border: none;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #5a52e0, #5ca3e6);
        }

        .alert {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="forgot-password-card">
        <h1>Forgot Password</h1>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php elseif (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <!-- Forgot Password Form -->
        <form method="post" action="<?= base_url('/auth/processforgotpassword') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
