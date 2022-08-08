<?php 
namespace App\Models;
use CodeIgniter\Model;
class DesignModel extends Model
{
    protected $table = 'design';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}