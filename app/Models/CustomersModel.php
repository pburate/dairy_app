<?php 
namespace App\Models;
use CodeIgniter\Model;
class CustomersModel extends Model
{
    protected $table = 'customer';
    // protected $useSoftDeletes = true;
    // protected $deletedField  = 'deleted_at';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['customer_id', 'full_name', 'phone', 'email', 'address','area_id','created_at','updated_at','is_blocked','latitude','longitude','whatsapp'];

}