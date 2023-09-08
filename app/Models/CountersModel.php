<?php 
namespace App\Models;
use CodeIgniter\Model;
class CountersModel extends Model
{
    protected $table = 'counter_info';
    protected $primaryKey = 'counter_info_id';
    protected $allowedFields = ['counter_info_id', 'counter_name', 'counter_value'];
}