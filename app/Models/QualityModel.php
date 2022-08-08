<?php 
namespace App\Models;
use CodeIgniter\Model;
class EraModel extends Model
{
    protected $table = 'quality';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}