<?php 
namespace App\Controllers;
use App\Models\WarehouseModel;
use CodeIgniter\Controller;
class WarehouseCrud extends Controller
{
    // show equipment list for Warehouse

    public function index(){
        $warehouseModel = new WarehouseModel();
        $data['warehouse'] = $warehouseModel->orderBy('id', 'DESC')->findAll();
        return view('warehouse_view', $data);
    }
    // add warehouse form
    public function create(){
        return view('add_warehouse');
    }
 
    // insert data to warehouse model
    public function store() {
        $warehouseModel = new WarehouseModel();
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
           
            
        ];
        $warehouseModel->insert($data);
        return $this->response->redirect(site_url('/warehouse-list'));
    }
    // show single Warehouse
    public function singleWarehouse($id = null){
        $warehouseModel = new WarehouseModel();
        $data['warehouse_obj'] = $warehouseModel->where('id', $id)->first();
        return view('editwarehouse_view', $data);
    }
    // update Warehouse data
    public function update(){
        $warehouseModel = new WarehouseModel();
        $id = $this->request->getVar('id');
        $data = [
            'era_no' => $this->request->getVar('era_no'),
            'tool_type'  => $this->request->getVar('tool_type'),
            'manufacturer_name' => $this->request->getVar('manufacturer_name'),
            'frequency'  => $this->request->getVar('frequency'),
            'due_date' => $this->request->getVar('due_date'),
        ];
        $warehouseModel->update($id, $data);
        return $this->response->redirect(site_url('/warehouse-list'));
    }
 
    // delete data
    public function delete($id = null){
        $warehouseModel = new WarehouseModel();
        $data['warehouse'] = $warehouseModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/warehouse-list'));
    }    
}