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
        }
        .content-wrapper {
            padding: 30px 0;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .card-body {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            border-radius: 5px;
            padding: 10px 20px;
        }
        .container-fluid {
            max-width: 1200px;
        }
        h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Dashboard Cards -->
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Employees</h5>
                            <p class="card-text">123</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Active Employees</h5>
                            <p class="card-text">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Absent Today</h5>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Employee Form -->
            <div class="row">
                <div class="col-md-12">
                    <h4>Create New Employee</h4>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?= base_url('employee/store'); ?>">
                                <?= csrf_field(); ?>
                                
                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter employee name" required>
                                </div>
                                
                                <!-- Position Field -->
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" name="position" class="form-control" id="position" placeholder="Enter position" required>
                                </div>
                                
                                <!-- Department Dropdown -->
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select name="department" class="form-control" id="department" required>
                                        <option value="" disabled selected>Select a Department</option>
                                        <?php foreach ($departments as $department): ?>
                                            <option value="<?= $department['id']; ?>"><?= $department['department_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary btn-custom">Add Employee</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
