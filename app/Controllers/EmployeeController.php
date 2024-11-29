<?php

namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\LeaveModel;
use App\Models\DepartmentModel;

class EmployeeController extends BaseController
{
    public function index()
{
   
    $employeeModel = new EmployeeModel();
    $employees = $employeeModel->getEmployees();

    return view('employee_list', ['employees' => $employees]);
}


    public function create()
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->findAll(); 
        return view('employee_create', $data);
    }

    public function store()
    {
        $model = new EmployeeModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'department' => $this->request->getPost('department'),
        ];
        $model->save($data);  // Save new employee to the database
        return redirect()->to('/employee');
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->find($id);  
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->findAll();  
        return view('employee_edit', $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'position' => $this->request->getVar('position'),
            'department' => $this->request->getVar('department'),
        ];
        $model->update($id, $data);  // Update employee details
        return redirect()->to('/employee');
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);  
        return redirect()->to('/employee');
    }
}
