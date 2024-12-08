<?php

namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\LeaveModel;
use App\Models\DepartmentModel;

use Dompdf\Dompdf;
use Dompdf\Options;

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
            
            $data = $this->request->getPost();

           
            if (!$this->validate([
                'name' => 'required|max_length[255]',
                'position' => 'required|max_length[255]',
                'department_id' => 'required|numeric'
            ])) {
               
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            
            $employeeModel = new EmployeeModel();

            
            $employeeModel->insert([
                'name' => $data['name'],
                'position' => $data['position'],
                'department_id' => $data['department_id'], 
            ]);

           
            
            return redirect()->to('/employee');
        }




public function edit($id){

    $model = new EmployeeModel();
    $data['employee'] = $model->find($id);  
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->findAll();  
    return view('employee_edit', $data);
}


    public function update($id){
   
    $model = new EmployeeModel();
    $data = [
        'name' => $this->request->getVar('name'),              
        'position' => $this->request->getVar('position'),      
        'department_id' => $this->request->getVar('department'), 
    ];

        if ($model->update($id, $data)) {
            return redirect()->to('/employee')->with('message', 'Employee updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update employee details.');
        }
}


    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);  
        return redirect()->to('/employee');
    }

    public function downloadPDF()
    {
    
        $db = \Config\Database::connect();
        $query = $db->query("SELECT e.name, e.position, d.department_name
                             FROM employees e 
                             JOIN departments d ON e.department_id = d.id");
        $employees = $query->getResultArray();

      
        $html = '<h3 style="text-align: center;">Liste des Employés</h3>';
        $html .= '<table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Poste</th>
                            <th>Département</th>
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($employees as $emp) {
            $html .= '<tr>
                        <td>' . htmlspecialchars($emp['name']) . '</td>
                        <td>' . htmlspecialchars($emp['position']) . '</td>
                        <td>' . htmlspecialchars($emp['department_name']) . '</td>
                      </tr>';
        }
        $html .= '</tbody></table>';

      
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

       
        $dompdf->stream("Employee_List.pdf", ["Attachment" => 1]);
    }

}
