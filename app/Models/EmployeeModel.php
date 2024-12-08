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
        'name' => 'required|alpha_numeric|max_length[255]',
        'position' => 'required|alpha_numeric|max_length[255]',
        'department_id' => 'required|numeric',
    ];

 
  
        
        
        public function getEmployees()
        {
        
            return $this->select('employees.id, employees.name, employees.position, employees.department_id, employees.created_at, employees.updated_at, departments.department_name')
                        ->join('departments', 'departments.id = employees.department_id', 'left') 
                        ->findAll();
        }
    }
    
    

    
   



