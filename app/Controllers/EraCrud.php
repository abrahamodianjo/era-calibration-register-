<?php 
namespace App\Controllers;
use App\Models\EraModel;
use CodeIgniter\Controller;
class EraCrud extends Controller
{
    // show equipment list
    public function index(){
        $eraModel = new EraModel();
        $data['cylinder'] = $eraModel->orderBy('id', 'DESC')->findAll();
        return view('cylinder_view', $data);
    }
    // add cylinder form
    public function create(){
        return view('add_cylinder');
    }
 
    // insert data
    public function store() {
        $eraModel = new EraModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $eraModel->insert($data);
        return $this->response->redirect(site_url('/cylinder-list'));
    }
    // show single era
    public function singleEra($id = null){
        $eraModel = new EraModel();
        $data['cylinder_obj'] = $eraModel->where('id', $id)->first();
        return view('edit_view', $data);
    }
    // update era data
    public function update(){
        $eraModel = new EraModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $eraModel->update($id, $data);
        return $this->response->redirect(site_url('/cylinder-list'));
    }
 
    // delete user
    public function delete($id = null){
        $eraModel = new EraModel();
        $data['cylinder'] = $eraModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/cylinder-list'));
    }    
}