<?php 
namespace App\Models;
use CodeIgniter\Model;
class EngineeringModel extends Model
{
    protected $table = 'engineering';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}