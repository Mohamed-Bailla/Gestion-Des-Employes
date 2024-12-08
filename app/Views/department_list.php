<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
        }

        .container {
            max-width: 900px;
        }

        h3 {
            margin-bottom: 30px;
            font-weight: 600;
            color: #333;
        }

        .btn {
            font-size: 14px;
            border-radius: 25px;
        }

        .btn-primary {
            background-color: #5f63f2;
            border: none;
        }

        .btn-primary:hover {
            background-color: #4e53e2;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .table {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #f8f9fa;
            color: #495057;
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: center;
        }

        .table tbody tr {
            transition: transform 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.02);
        }

        .table .actions {
            display: flex;
            justify-content: center;
        }

        .table .actions .btn {
            margin-left: 10px;
        }

        .card {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .btn-tooltip {
            position: relative;
        }

        .btn-tooltip:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 5px;
            white-space: nowrap;
            z-index: 10;
        }

        .btn-back {
            background-color: #6c757d;
            border: none;
            margin-bottom: 20px;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }
        html{
            scroll-behavior: smooth;
        }

    </style>
</head>

<body>

<?php $this->extend('layouts/default'); ?>

<?php $this->section('content'); ?>


    <div class="container">
        <a href="<?= base_url('employee'); ?>" class="btn btn-back">
            <i class="fas fa-arrow-left"></i> Retour à la liste des employés
        </a>

        <div class="card">
            <div class="card-header">
                <h3>Department List</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('department/create'); ?>" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Add Department
                </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departments as $department): ?>
                        <tr>
                            <td><?= esc($department['department_name']); ?></td>
                            <td class="actions">
                                <a href="<?= base_url('department/edit/' . $department['id']); ?>" class="btn btn-info btn-sm btn-tooltip" data-tooltip="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= base_url('department/delete/' . $department['id']); ?>" class="btn btn-danger btn-sm btn-tooltip" data-tooltip="Delete" onclick="return confirm('Are you sure you want to delete this department?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<?php $this->endSection(); ?>
</body>

</html>
