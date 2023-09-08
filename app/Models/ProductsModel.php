<?php 
namespace App\Models;
use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['product_name','product_category' ,'weight', 'unit', 'selling_price_including_tax','tax_amount'];
}