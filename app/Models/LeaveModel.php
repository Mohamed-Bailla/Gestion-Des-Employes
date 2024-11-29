<?php

namespace App\Models;
use CodeIgniter\Model;

class LeaveModel extends Model
{
    protected $table = 'leaves';
    protected $primaryKey = 'id';
    protected $allowedFields = ['employee_id', 'start_date', 'end_date', 'leave_type', 'status'];

    public function getEmployeeLeaves($employee_id)
    {
        return $this->where('employee_id', $employee_id)->findAll();  // Fetch leaves for a particular employee
    }

    // Additional methods to approve or reject leaves can be added
}
