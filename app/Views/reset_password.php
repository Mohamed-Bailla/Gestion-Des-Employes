<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Reset Password</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #6c63ff, #64b5f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .reset-password-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            font-size: 26px;
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
            margin-bottom: 15px;
        }

        .input-group-text {
            background: #6c63ff;
            color: #fff;
            border: none;
        }

        .input-group-text i {
            font-size: 18px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="reset-password-card">
        <h1>Reset Password</h1>

       
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
        <?php elseif (session()->getFlashdata('success')): ?>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

      
        <form method="post" action="<?= base_url('/auth/update-password') ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="token" value="<?= $token ?>">

            <div class="form-group mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Enter new password" required>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Re-enter new password" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100"><i class="fas fa-redo"></i> Reset Password</button>
        </form>
    </div>
</body>
</html>
