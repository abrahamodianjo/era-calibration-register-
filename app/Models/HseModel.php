<?php 
namespace App\Models;
use CodeIgniter\Model;
class HseModel extends Model
{
    protected $table = 'hse';
    protected $primaryKey = 'id';
    protected $allowedFields = ['era_no', 'tool_type', 'manufacturer_name', 'frequency', 'due_date'];
}