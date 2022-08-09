<?php 
namespace App\Controllers;
use App\Models\VsModel;
use CodeIgniter\Controller;
class VsCrud extends Controller
{
    // show equipment list for vertical sliding
    public function index(){
        $vsModel = new VsModel();
        $data['vs'] = $vsModel->orderBy('id', 'DESC')->findAll();
        return view('vs_view', $data);
    }
    // add vertical sliding form
    public function create(){
        return view('add_vs');
    }
 
    // insert data to vs model
    public function store() {
        $vsModel = new VsModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $vsModel->insert($data);
        return $this->response->redirect(site_url('/vs-list'));
    }
    // show single era
    public function singleVs($id = null){
        $vsModel = new VsModel();
        $data['vs_obj'] = $vsModel->where('id', $id)->first();
        return view('editvs_view', $data);
    }
    // update era data
    public function update(){
        $vsModel = new VsModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $vsModel->update($id, $data);
        return $this->response->redirect(site_url('/vs-list'));
    }
 
    // delete user
    public function delete($id = null){
        $vsModel = new VsModel();
        $data['vs'] = $vsModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/vs-list'));
    }    
}