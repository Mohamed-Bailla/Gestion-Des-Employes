<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fb;
            color: #333;
            line-height: 1.6;
        }

        .container-fluid {
            max-width: 1200px;
        }

        .content-wrapper {
            padding: 60px 0;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: none;
            background-color: #fff;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #d1d3e2;
            transition: all 0.3s ease-in-out;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #5c63f5;
            box-shadow: 0 0 0 0.2rem rgba(93, 99, 255, 0.25);
        }

        .form-control[disabled], .form-control[readonly] {
            background-color: #e9ecef;
        }

        .btn-custom {
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 1.2rem;
            background-color: #5c63f5;
            color: #fff;
            transition: all 0.3s ease-in-out;
            border: none;
        }

        .btn-custom:hover {
            background-color: #4e54e1;
            box-shadow: 0 4px 8px rgba(92, 99, 255, 0.3);
        }

        .card-body {
            padding: 2.5rem;
        }

        h4 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 10px;
            border: 1px solid #d1d3e2;
        }

        .form-control, .select2-container {
            width: 100% !important;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #555;
            font-weight: 500;
        }

        .input-group-text {
            background-color: #f4f7fb;
            border-color: #d1d3e2;
        }

        .badge {
            font-weight: 500;
            border-radius: 12px;
        }

        .row {
            margin-bottom: 30px;
        }

        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="content-wrapper">
     
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4>Edit Employee</h4>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?= base_url('employee/update/'.$employee['id']); ?>">
                                <?= csrf_field(); ?>

                             
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="<?= esc($employee['name']); ?>" required>
                                </div>

                        
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" name="position" class="form-control" id="position" value="<?= esc($employee['position']); ?>" required>
                                </div>

                                
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select name="department" class="form-control" id="department" required>
                                        <option value="" disabled>Select a Department</option>
                                        <?php foreach ($departments as $department): ?>
                                            <option value="<?= esc($department['id']); ?>" <?= ($employee['department_id'] == $department['id']) ? 'selected' : ''; ?>>
                                                <?= esc($department['department_name']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-custom">Update Employee</button>
                                    <a href="<?= base_url('employee'); ?>" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
