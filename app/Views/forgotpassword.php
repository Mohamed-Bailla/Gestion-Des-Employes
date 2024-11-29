<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
        .form-control {
            border-radius: 8px;
            box-shadow: none;
        }
        .btn-primary {
            width: 100%;
            border-radius: 8px;
        }
        .error-message, .success-message {
            text-align: center;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .error-message {
            color: #dc3545;
        }
        .success-message {
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="card">
        <h3 class="card-title text-center mb-4">Forgot Password</h3>

        <!-- Display Flash Messages -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error-message"><?= session()->getFlashdata('error') ?></div>
        <?php elseif (session()->getFlashdata('success')): ?>
            <div class="success-message"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <!-- Forgot Password Form -->
        <form method="post" action="<?= base_url('reset-password/sendToken') ?>">
            <?= csrf_field() ?>

            <!-- Email Input -->
            <div class="mb-3">
                <label for="inputemail" class="form-label">Enter your Email</label>
                <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>