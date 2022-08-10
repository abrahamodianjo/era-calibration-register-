<?php 
namespace App\Models;
use CodeIgniter\Model;
class MplModel extends Model
{
    protected $table = 'mpl';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}