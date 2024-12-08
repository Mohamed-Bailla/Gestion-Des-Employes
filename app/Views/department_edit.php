<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Edit Department</h3>
        <form action="<?= base_url('department/update/' . $department['id']); ?>" method="POST">
            <div class="mb-3">
                <label for="department_name" class="form-label">Department Name</label>
                <input type="text" class="form-control" id="department_name" name="department_name" value="<?= esc($department['department_name']); ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="<?= base_url('department'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
