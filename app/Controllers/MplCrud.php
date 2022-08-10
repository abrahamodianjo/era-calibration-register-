<?php 
namespace App\Controllers;
use App\Models\MplModel;
use CodeIgniter\Controller;
class MplCrud extends Controller
{
    // show equipment list
    public function index(){
        $mplModel = new MplModel();
        $data['mpl'] = $mplModel->orderBy('id', 'DESC')->findAll();
        return view('mpl_view', $data);
    }
    // add mpl form
    public function create(){
        return view('add_mpl');
    }
 
    // insert data
    public function store() {
        $mplModel = new MplModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $mplModel->insert($data);
        return $this->response->redirect(site_url('/mpl-list'));
    }
    // show single mpl
    public function singleMpl($id = null){
        $mplModel = new MplModel();
        $data['mpl_obj'] = $mplModel->where('id', $id)->first();
        return view('editmpl_view', $data);
    }
    // update mpl data
    public function update(){
        $mplModel = new MplModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $mplModel->update($id, $data);
        return $this->response->redirect(site_url('/mpl-list'));
    }
 
    // delete mpl
    public function delete($id = null){
        $mplModel = new MplModel();
        $data['mpl'] = $mplModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/mpl-list'));
    }    
}