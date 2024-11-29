<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Page</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #6c63ff, #64b5f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
        }

        .login-header {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: linear-gradient(to right, #6c63ff, #64b5f6);
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #5a52e0, #5ca3e6);
        }

        a {
            text-decoration: none;
            color: #6c63ff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .form-label {
            font-weight: bold;
        }

        .alert {
            font-size: 14px;
        }

        .input-group-text {
            background: #6c63ff;
            color: #fff;
            border: none;
        }

        .input-group-text i {
            font-size: 18px;
        }

        .text-end a {
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .text-end a i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h1 class="login-header">Welcome Back!</h1>
        <form action="/login/verification" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
            </div>
            <p class="text-end">
                <a href="/forgotpassword"><i class="fas fa-key"></i> Forgot Password?</a>
            </p>
            
            <!-- Flash Messages -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
            </div>
        </form>
    </div>
</body>
</html>
