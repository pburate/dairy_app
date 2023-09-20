<?php 
namespace App\Models;
use CodeIgniter\Model;

class WastagesModel extends Model
{
    protected $table = 'wastage';
    protected $primaryKey = 'wastage_id';
    protected $allowedFields = ['wastage_id', 'product_id', 'quantity', 'wastage_date', 'location','reason'];
}