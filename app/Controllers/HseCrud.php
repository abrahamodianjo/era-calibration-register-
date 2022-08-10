<?php 
namespace App\Controllers;
use App\Models\HseModel;
use CodeIgniter\Controller;
class HseCrud extends Controller
{
    // show equipment list for health and safety  
    public function index(){
        $hseModel = new HseModel();
        $data['hse'] = $hseModel->orderBy('id', 'DESC')->findAll();
        return view('hse_view', $data);
    }
    // create Health and Safety data form
    public function create(){
        return view('add_hse');
    }
 
    // insert data to health & safety model
    public function store() {
        $hseModel = new HseModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $hseModel->insert($data);
        return $this->response->redirect(site_url('/hse-list'));
    }


    // show single hse equipment to edit 
    public function singleHse($id = null){
        $hseModel = new HseModel();
        $data['hse_obj'] = $hseModel->where('id', $id)->first();
        return view('edithse_view', $data);
    }


    // update hse data 
    public function update(){
        $hseModel = new HseModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $hseModel->update($id, $data);
        return $this->response->redirect(site_url('/hse-list'));
    }
 
    // delete hse equipment data 
    public function delete($id = null){
        $hseModel = new HseModel();
        $data['hse'] = $hseModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/hse-list'));
    }    
}