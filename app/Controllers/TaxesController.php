<?php

namespace App\Controllers;
use App\Models\TaxesModel;
 
class TaxesController extends BaseController{
   
    public function index(){
        if (auth()->loggedIn()) {
            $taxes_model = new TaxesModel();
            $data['taxes'] = $taxes_model->findAll();  
      return view("taxes/view_taxes",$data);
     }
     else {
            return redirect()->to('/login');
        }
    }

    public function add_taxes()
    {
        return view('taxes/add_taxes');
    }
}

?>