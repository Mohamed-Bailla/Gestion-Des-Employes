<?php

namespace App\Models;
use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['department_name'];
  
    

    public function getDepartments()
    {
        return $this->findAll();  
    }
}
