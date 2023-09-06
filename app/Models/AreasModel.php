<?php 
namespace App\Models;
use CodeIgniter\Model;
class AreasModel extends Model
{
    protected $table = 'areas';
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';
    protected $primaryKey = 'areas_id';
    protected $allowedFields = ['areas_id', 'areas_name', 'created_at', 'updated_at', 'delete_at'];
}