<?php 
namespace App\Models;
use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'tax_info';
    protected $primaryKey = 'tax_info_id';
    protected $allowedFields = ['tax_name','tax_percentage' ,'tax_reg_number', 'is_deleted', 'hsn_code'];
}