<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use App\Models\DairyLocationsModel;
use App\Models\StocksModel;

class StocksController extends BaseController{
       public function index(){

        if (auth()->loggedIn()) {
              $stock_model = new StocksModel();
              $data['stocks'] = $stock_model->findAll();  
              $product_model = new ProductsModel();
              $dairy_location_model = new DairyLocationsModel();
              $data['products'] = $product_model->findAll();  
              $data['locations'] = $dairy_location_model->findAll();   
              return view("stocks/add_stocks",$data);
       }
       else {
              return redirect()->to('/login');
          }
       }

       public function store_stocks()
       {
        $stock_model = new StocksModel();
           $data = [
               'product_id' => $this->request->getPost('p_id[]'),
               'location_id' => $this->request->getPost('location_id[]'),
               'inward_quantity' => $this->request->getPost(('inward_quantity[]')),
               "outward_quantity" => $this->request->getPost('outward_quantity[]'),
               'stock_quantity' => $this->request->getPost('stock_quantity[]'),
               'stock_date' => $this->request->getPost('stock_date[]'),
           ];
          print_r($data);
        // $stock_model->save(serialize($data));
        //return $this->response->redirect(base_url('/StocksController'));
       }
    }