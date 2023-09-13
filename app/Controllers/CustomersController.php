<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\CustomersModel;
use App\Models\AreasModel;
use App\Models\ProductsModel;
use App\Models\CustomersMonthlyModel;



class CustomersController extends BaseController
{
    public function index()
    {
        $customers_model = new CustomersModel();
        $data['customers'] = $customers_model->join('area', 'customer.area_id = area.area_id')->findAll();
        
            // ->join('product', '.area_id = product.product_id')->findAll();
        return view('customers/view_customers', $data);
    }
    public function add_customers()
    {
        $areas_model = new AreasModel();
        $data['areas'] = $areas_model->findAll();
        $products_model = new ProductsModel();
        $data['products'] = $products_model->findAll();
        return view('customers/add_customers', $data);
    }
    public function store_customers()
    {
        
        $customers_model = new CustomersModel();
        $customer_monthly_model = new CustomersMonthlyModel();
        $customer = $this->request->getVar("customer");
        $customers_model->insert($customer);
        $customer_monthly = $this->request->getVar("customer_monthly_details");
        $customer_monthly_model->insert($customer_monthly);
        
        return $this->response->redirect(base_url('/CustomersController'));
    }

    public function edit_customers($id)
    {
        $areas_model = new AreasModel;
        $data['areas']= $areas_model->findAll();

        $customers_model = new CustomersModel();
        $data['customers'] = $customers_model->where('customer_id', $id)->first();

        return view('customers/edit_customers', $data);
    }
    // update user data
    
    public function update_customers()
    {
        // die();
        $customers_model = new CustomersModel();
        
        $id = $this->request->getVar('customer_id');
        $customer = $this->request->getVar("customer");
    
        $customers_model->update($id, $customer);
        return $this->response->redirect(base_url('/CustomersController'));
    }

    // delete user
    public function delete_customers()
    {
        $customers_model = new CustomersModel();
        $customers_model->delete($this->request->getVar('customer_id'));
        $message = ['status' => 'Deleted'];
        return $this->response->setJSON($message);
    }
}