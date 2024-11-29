<?php

namespace App\Models;
use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';  
    protected $primaryKey = 'id';    
    protected $allowedFields = ['name', 'position', 'department_id', 'created_at', 'updated_at'];

    protected $useTimestamps = false;
    protected $validationRules = [
        'name' => 'required|max_length[255]',
        'position' => 'required|max_length[255]',
        'department' => 'required|max_length[255]',
    ];

 
  
        
        
        public function getEmployees()
        {
        
            return $this->select('employees.id, employees.name, employees.position, employees.department_id, employees.created_at, employees.updated_at, departments.department_name')
                        ->join('departments', 'departments.id = employees.department_id', 'left') // Left join to include employees even if they don't have a department
                        ->findAll();
        }
    }
    
    

    
   



