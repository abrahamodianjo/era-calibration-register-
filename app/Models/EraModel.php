<?php 
namespace App\Models;
use CodeIgniter\Model;
class EraModel extends Model
{
    protected $table = 'cylinder';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}