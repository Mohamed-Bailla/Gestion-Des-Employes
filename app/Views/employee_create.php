<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            max-width: 1200px;
            padding: 30px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            background-color: #ffffff;
        }

        .card-body {
            padding: 3rem;
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 5px;
            font-size: 1rem;
            padding: 12px;
            background-color: #f1f3f5;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(38, 143, 255, 0.5);
        }

        label {
            font-size: 1.1rem;
            font-weight: 500;
            color: #495057;
        }

        .btn-custom {
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-custom:focus {
            outline: none;
        }

        .row {
            margin-top: 20px;
        }

        .alert {
            font-size: 1rem;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }
        
        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
        }

        .page-description {
            font-size: 1.1rem;
            font-weight: 400;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h2 class="page-title">Create a New Employee</h2>
    <p class="page-description">Fill in the form below to add a new employee to the system.</p>
    
 
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

  
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('employee/store'); ?>">
                <?= csrf_field(); ?>

             
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter employee name" required>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" name="position" class="form-control" id="position" placeholder="Enter position" required>
                </div>

            
                <div class="form-group">
                    <label for="department">Department</label>
                    <select name="department_id" class="form-control" id="department" required>
                        <option value="" disabled selected>Select a Department</option>
                        <?php foreach ($departments as $department): ?>
                            <option value="<?= $department['id']; ?>"><?= $department['department_name']; ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>

               
                <button type="submit" class="btn btn-primary btn-custom">Add Employee</button>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
