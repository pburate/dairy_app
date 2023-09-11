<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
class CustomersModel extends Model
{
   

    protected $table = 'customer';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $primaryKey = 'customer_id';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $allowedFields = ['customer_id', 'full_name', 'phone', 'email', 'address','area_id','created_at','updated_at','is_blocked','latitude','longitude','whatsapp'];

}