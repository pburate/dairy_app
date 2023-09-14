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
        // $customers_model = new CustomersModel();
        $customer_monthly_model = new CustomersMonthlyModel();

        $data['customers'] = $customer_monthly_model
        ->join('customer', 'customer.customer_id = customer_monthly_delivery.customer_id')
        ->join('product', 'product.product_id = customer_monthly_delivery.product_id')
        ->join('area', 'customer.area_id = area.area_id')
        ->findAll();
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
        $session = \Config\Services::session();

        //  storing customers_data and customers_monthly_data together in different tables 
        $customers_model = new CustomersModel();
        $customer = $this->request->getVar("customer");
        $customers_model->insert($customer);
        $customer_id = $customers_model->getInsertID();

        $customer_monthly_model = new CustomersMonthlyModel();
        $customer_monthly = [
            'customer_id' => $customer_id,
            'product_id' =>  $this->request->getVar("customer_monthly_details[product_id]"),
            'quantity' =>  $this->request->getVar("customer_monthly_details[quantity]"),
        ];
        $customer_monthly_model->insert($customer_monthly);
        $session->setFlashdata('status', 'Customer inserted Successfully');
        
        return $this->response->redirect(base_url('/CustomersController'));
    }

    public function edit_customers($id)
    {
        $areas_model = new AreasModel;
        $data['areas']= $areas_model->findAll();

        $products_model = new ProductsModel();
        $data['products'] = $products_model->findAll();

        $customer_monthly_model = new CustomersMonthlyModel();
        $data['customer_monthly_delivery']= $customer_monthly_model->where('customer_id', $id)->first();
        
        $customers_model = new CustomersModel();
        $data['customers'] = $customers_model->where('customer_id', $id)->first();

        return view('customers/edit_customers', $data);
    }
    // update user data
    
    public function update_customers()
    {
        $session = \Config\Services::session();

        // die();
        $customers_model = new CustomersModel();
        
        $id = $this->request->getVar('customer_id');
        $monthly_delivery_id  = $this->request->getVar('monthly_delivery_id');
        
        
        $customer = $this->request->getVar("customer");

        $customer_monthly_model = new CustomersMonthlyModel();
        $customer_monthly = $this->request->getVar("customer_monthly_details");
  
        $customers_model->update($id, $customer);
        $customer_monthly_model->update($monthly_delivery_id, $customer_monthly);
        $session->setFlashdata('status', 'Customer updated Successfully');
        return $this->response->redirect(base_url('/CustomersController'));
    }

    // delete user
    public function delete_customers()
    {
        $session = \Config\Services::session();

        $customers_model = new CustomersModel();
        $customers_model->delete($this->request->getVar('customer_id'));
        $message = ['status' => 'Deleted'];
        $session->setFlashdata('status', 'Customer deleted Successfully');
        return $this->response->setJSON($message);
    }
}