<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mystyles/styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="cont-form ">
        <h1 class="text text-center">Welcome Back !</h1>
        
        <form action="/login/verification" method="post">
            
             <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>

             <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
             </div>

             <?php if (session()->getFlashdata('error')): ?>
             <p class="alert alert-danger"><?= session()->getFlashdata('error') ?></p>
             <?php endif; ?>

             <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Login</button>
             </div>

        </form>
        
    </div>
</body>
</html>