<?php 
namespace App\Models;
use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['product_name','product_category' ,'weight', 'unit', 'price_before_tax','selling_price_including_tax','tax_amount','created_at','updated_at', 'deleted_at'];
}