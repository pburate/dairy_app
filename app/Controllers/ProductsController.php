<?php

namespace App\Controllers;
use App\Models\ProductsModel;
class ProductsController extends BaseController{
       public function index(){
        return view("Products/view_products");
       }
}
?>