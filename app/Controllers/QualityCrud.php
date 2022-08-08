<?php 
namespace App\Controllers;
use App\Models\QualityModel;
use CodeIgniter\Controller;
class QualityCrud extends Controller
{
    // show equipment list
    public function index(){
        $qualityModel = new QualityModel();
        $data['quality'] = $qualityModel->orderBy('id', 'DESC')->findAll();
        return view('quality_view', $data);
    }
    // add quality form
    public function create(){
        return view('add_quality');
    }
 
    // insert data
    public function store() {
        $qualityModel = new QualityModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $qualityModel->insert($data);
        return $this->response->redirect(site_url('/quality-list'));
    }
    // show single era
    public function singleQuality($id = null){
        $qualityModel = new QualityModel();
        $data['quality_obj'] = $qualityModel->where('id', $id)->first();
        return view('editquality_view', $data);
    }
    // update era data
    public function update(){
        $qualityModel = new QualityModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $qualityModel->update($id, $data);
        return $this->response->redirect(site_url('/quality-list'));
    }
 
    // delete user
    public function delete($id = null){
        $qualityModel = new QualityModel();
        $data['quality'] = $qualityModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/quality-list'));
    }    
}