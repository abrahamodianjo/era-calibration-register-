<?php 
namespace App\Controllers;
use App\Models\EngineeringModel;
use CodeIgniter\Controller;
class EngineeringCrud extends Controller
{
    // show equipment list for Engineering sliding 
    public function index(){
        $engineeringModel = new EngineeringModel();
        $data['engineering'] = $engineeringModel->orderBy('id', 'DESC')->findAll();
        return view('engineering_view', $data);
    }
    // create engineering data form
    public function create(){
        return view('add_engineering');
    }
 
    // insert data to engineering model
    public function store() {
        $engineeringModel = new EngineeringModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $engineeringModel->insert($data);
        return $this->response->redirect(site_url('/engineering-list'));
    }


    // show single engineering equipment to edit 
    public function singleEngineering($id = null){
        $engineeringModel = new EngineeringModel();
        $data['engineering_obj'] = $engineeringModel->where('id', $id)->first();
        return view('editengineering_view', $data);
    }


    // update engineering data 
    public function update(){
        $engineeringModel = new EngineeringModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $engineeringModel->update($id, $data);
        return $this->response->redirect(site_url('/engineering-list'));
    }
 
    // delete engineering equipment data 
    public function delete($id = null){
        $engineeringModel = new EngineeringModel();
        $data['engineering'] = $engineeringModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/engineering-list'));
    }    
}