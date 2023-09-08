<?php 
namespace App\Models;
use CodeIgniter\Model;
class CountersModel extends Model
{
    protected $table = 'counters_info';
    protected $primaryKey = 'counters_info_id';
    protected $allowedFields = ['counters_info_id', 'counters_name', 'counters_value'];
}