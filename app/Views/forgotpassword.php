<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php elseif (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    <!-- <form action="/forgotpassword/send" method="post">
        <?= csrf_field() ?>
        <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Send Reset Link</button>
    </form> -->

    <form class="row g-3" method="post" action="<?= base_url('reset-password/sendToken') ?>">
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Inserer votre Email</label>
    <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirmmer</button>
  </div>
</form>
</body>
</html>
