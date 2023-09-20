<?php 
namespace App\Models;
use CodeIgniter\Model;
class TaxesModel extends Model
{
    protected $table = 'tax';
    protected $primaryKey = 'tax_id';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['tax_name','tax_percentage' ,'tax_reg_number', 'created_at', 'updated_at', 'deleted_at', 'hsn_code'];
}