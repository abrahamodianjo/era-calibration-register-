<?php 
namespace App\Models;
use CodeIgniter\Model;
class VsModel extends Model
{
    protected $table = 'vs';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}