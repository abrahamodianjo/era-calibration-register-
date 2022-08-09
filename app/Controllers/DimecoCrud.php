<?php 
namespace App\Controllers;
use App\Models\DimecoModel;
use CodeIgniter\Controller;
class DimecoCrud extends Controller
{
    // show equipment list for Dimeco sliding 
    public function index(){
        $dimecoModel = new DimecoModel();
        $data['dimeco'] = $dimecoModel->orderBy('id', 'DESC')->findAll();
        return view('dimeco_view', $data);
    }
    // add vertical sliding form
    public function create(){
        return view('add_dimeco');
    }
 
    // insert data to vs model
    public function store() {
        $dimecoModel = new DimecoModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $dimecoModel->insert($data);
        return $this->response->redirect(site_url('/dimeco-list'));
    }


    // show single Dimeco equipment to edit 
    public function singleDimeco($id = null){
        $dimecoModel = new DimecoModel();
        $data['dimeco_obj'] = $dimecoModel->where('id', $id)->first();
        return view('editdimeco_view', $data);
    }


    // update Dimeco data 
    public function update(){
        $dimecoModel = new DimecoModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $dimecoModel->update($id, $data);
        return $this->response->redirect(site_url('/dimeco-list'));
    }
 
    // delete Dimeco equipment data 
    public function delete($id = null){
        $dimecoModel = new DimecoModel();
        $data['dimeco'] = $dimecoModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/dimeco-list'));
    }    
}