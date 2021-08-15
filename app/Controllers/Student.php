<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
    public function index()
    {    
        return view('add');
    }    
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new StudentModel();
		
        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name'  => $this->request->getVar('txtLname'),
            'address'  => $this->request->getVar('txtAddress'),
            'email'  => $this->request->getVar('txtEmail'),
            'mobile'  => $this->request->getVar('txtMobile'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('student') );
    }
 
}

?>