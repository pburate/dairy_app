<?php 
namespace App\Models;
use CodeIgniter\Model;
class DairyLocationsModel extends Model
{
    protected $table = 'dairy_location';
    protected $primaryKey = 'location_id';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['location_id','location_name','created_at','updated_at','deleted_at'];
}
?>