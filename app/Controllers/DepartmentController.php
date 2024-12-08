<?php

namespace App\Controllers;
use App\Models\DepartmentModel;

class DepartmentController extends BaseController
{
    public function __construct()
    {
        $this->departmentModel = new DepartmentModel();
    }

    // Show the list of departments
    public function index()
    {
        $data['departments'] = $this->departmentModel->getDepartments();
        return view('department_list', $data);  // Directly use department_list.php from Views/
    }

    // Show the form to add a new department
    public function create()
    {
        return view('department_create');  // Directly use department_create.php from Views/
    }

    // Handle form submission for adding a new department
    public function store()
    {
        $departmentName = $this->request->getPost('department_name');
        $this->departmentModel->save([
            'department_name' => $departmentName,
        ]);

        return redirect()->to('/department');  // Redirect to department list after saving
    }

    // Show the form to edit a department
    public function edit($id)
    {
        $data['department'] = $this->departmentModel->find($id);
        return view('department_edit', $data);  // Directly use department_edit.php from Views/
    }

    // Handle form submission for editing a department
    public function update($id)
    {
        $departmentName = $this->request->getPost('department_name');
        $this->departmentModel->update($id, [
            'department_name' => $departmentName,
        ]);

        return redirect()->to('/department');  // Redirect after update
    }

    // Delete a department
    public function delete($id)
    {
        $this->departmentModel->delete($id);
        return redirect()->to('/department');
    }
}
