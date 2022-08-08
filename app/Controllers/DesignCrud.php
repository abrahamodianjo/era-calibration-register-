<?php 
namespace App\Controllers;
use App\Models\DesignModel;
use CodeIgniter\Controller;
class DesignCrud extends Controller
{
    // show equipment list
    public function index(){
        $designModel = new DesignModel();
        $data['design'] = $designModel->orderBy('id', 'DESC')->findAll();
        return view('design_view', $data);
    }
    // add design form
    public function create(){
        return view('add_design');
    }
 
    // insert data
    public function store() {
        $designModel = new DesignModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),        
        ];
        $designModel->insert($data);
        return $this->response->redirect(site_url('/design-list'));
    }
    // show single era
    public function singleDesign($id = null){
        $designModel = new DesignModel();
        $data['design_obj'] = $designModel->where('id', $id)->first();
        return view('editdesign_view', $data);
    }
    
    // update design data
    public function update(){
        $designModel = new DesignModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $designModel->update($id, $data);
        return $this->response->redirect(site_url('/design-list'));
    }
 
    // delete user
    public function delete($id = null){
        $designModel = new DesignModel();
        $data['design'] = $designModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/design-list'));
    }    
}