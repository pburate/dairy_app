<?php 
namespace App\Models;
use CodeIgniter\Model;
class CustomersMonthlyModel extends Model
{
   

    protected $table = 'customer_monthly_delivery ';

    protected $primaryKey = 'monthly_delivery_id';

    protected $allowedFields = ['monthly_delivery_id', 'customer_id', 'product_id', 'quantity'];

}