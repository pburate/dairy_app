<?php 
namespace App\Models;
use CodeIgniter\Model;
class AreasModel extends Model
{
    protected $table = 'area';
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';
    protected $primaryKey = 'area_id';
    protected $allowedFields = ['area_id', 'area_name', 'created_at', 'updated_at', 'delete_at'];
}