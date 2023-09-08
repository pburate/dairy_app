<?php

namespace App\Controllers;
use App\Models\ProductsModel;
class ProductsController extends BaseController{
       public function index(){

        if (auth()->loggedIn()) {
              $product_model = new ProductsModel();
              $data['products'] = $product_model->findAll();  
        return view("products/view_products",$data);
       }
       else {
              return redirect()->to('/login');
          }
       }

    //    add product
       public function add_products()
    {
        return view('products/add_products');
    }

    public function store_products()
    {
        $session = \Config\Services::session();
       $product_model = new ProductsModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_category' => $this->request->getPost('product_category'),
            'weight' => $this->request->getPost('product_weight'),
            'unit' => $this->request->getPost('product_unit'),
            'selling_price_including_tax' => $this->request->getPost('selling_price_including_tax'),
            'tax_amount' => $this->request->getPost('product_tax_amount'),
        ];
        print_r($data);
        $product_model->save($data);

$session->setFlashdata('status', 'Product has inserted Successfully');
        return $this->response->redirect(base_url('/ProductsController'));
    }

    //delete product

    public function delete_product($id){
        $session = \Config\Services::session();
        $product_model = new ProductsModel();
            $product_model->delete($id);
$session->setFlashdata('status', 'Product has deleted Successfully');
        return $this->response->redirect(base_url('/ProductsController'));
    }

    //Edit view
    public function edit_product($id){
        $product_model = new ProductsModel();
        $data['products'] = $product_model->find($id);
        return view('products/edit_products',$data);
    }

    //Edit
    public function update_product(){
        $session = \Config\Services::session();
        $product_model = new ProductsModel();
        $id = $this->request->getPost('product_id');
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_category'  => $this->request->getPost('product_category'),
            'weight'  => $this->request->getPost('product_weight'),
            'unit'  => $this->request->getPost('product_unit'),
            'selling_price_including_tax'  => $this->request->getPost('selling_price_including_tax'),
            'tax_amount'  => $this->request->getPost('product_tax_amount'),
        ];
        $product_model->update($id, $data);
$session->setFlashdata('status', 'Product has updated Successfully');
        return $this->response->redirect(base_url('/ProductsController'));
    }
}



?>