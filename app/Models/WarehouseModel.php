<?php 
namespace App\Models;
use CodeIgniter\Model;
class WarehouseModel extends Model
{
    protected $table = 'warehouse';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}