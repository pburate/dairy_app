<?php 
namespace App\Models;
use CodeIgniter\Model;
class CustomersModel extends Model
{
    protected $table = 'customer';
    // protected $useSoftDeletes = true;
    // protected $deletedField  = 'deleted_at';
    protected $useTimestamps = true;
    protected $primaryKey = 'customer_id';
    protected $createdField  = 'created_at';
    // Time::now('Asia/Kolkata', 'en_US'),
    //  Time::now('Asia/Kolkata', 'en_US'),
    protected $updatedField  = 'updated_at';
    protected $allowedFields = ['customer_id', 'full_name', 'phone', 'email', 'address','area_id','created_at','updated_at','is_blocked','latitude','longitude','whatsapp'];

}