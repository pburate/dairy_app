<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\CustomersModel;
use App\Models\AreasModel;


class CustomersController extends BaseController
{
    public function index()
    {
        $customers_model = new CustomersModel();
        $data['customers'] = $customers_model
            ->join('area', 'customer.area_id = area.area_id')->findAll();
        return view('customers/view_customers', $data);
    }
    public function add_customers()
    {
        $areas_model = new AreasModel();
        $data['areas'] = $areas_model->findAll();
        return view('customers/add_customers', $data);
    }
    public function store_customers()
    {

        $customers_model = new CustomersModel();
        $data = [
            'full_name' => $this->request->getVar('full_name'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'address' => $this->request->getVar('address'),
            'area_id' => $this->request->getVar('area_id'),
            'created_at' => Time::now('Asia/Kolkata', 'en_US'),
            'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
            'whatsapp' => $this->request->getVar('whatsapp'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude'),
        ];
        $customers_model->insert($data);
        return $this->response->redirect(base_url('/CustomersController'));
    }

    public function edit_customers($id = null)
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
        $data = [
            'full_name' => $this->request->getVar('full_name'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'address' => $this->request->getVar('address'),
            'area_id' => $this->request->getVar('area_id'),
            'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude'),
            'whatsapp' => $this->request->getVar('whatsapp'),
        ];
        // print_r($data);
        // die();
        $customers_model->update($id, $data);
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