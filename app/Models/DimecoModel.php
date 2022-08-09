<?php 
namespace App\Models;
use CodeIgniter\Model;
class DimecoModel extends Model
{
    protected $table = 'dimeco';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}