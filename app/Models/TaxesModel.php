<?php 
namespace App\Models;
use CodeIgniter\Model;
class TaxesModel extends Model
{
    protected $table = 'tax_info';
    protected $primaryKey = 'tax_info_id';
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['tax_name','tax_percentage' ,'tax_reg_number', 'deleted_at', 'hsn_code'];
}