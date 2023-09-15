<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\WastagesModel;

class WastagesController extends BaseController
{
    public function index()
    {
        $wastage_model = new WastagesModel();
        $data['wastage'] = $wastage_model->findAll();
        return view('wastage/view_wastages', $data);

    }

    // public function add_areas()
    // {
    //     return view('areas/add_areas');
    // }


    // public function store_areas()
    // {
    //     $session = \Config\Services::session();
    //     $areas_model = new AreasModel();
    //     $data = [
    //         'area_name' => $this->request->getVar('area_name'),
    //         'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
    //         'created_at' => Time::now('Asia/Kolkata', 'en_US'),
    //     ];
    //     $areas_model->insert($data);
    //     $session->setFlashdata('status', 'Area inserted Successfully');
    //     return $this->response->redirect(base_url('/AreasController'));
    // }

    // public function edit_areas($id)
    // {
    //     $areas_model = new AreasModel();
    //     $data['areas'] = $areas_model->where('area_id', $id)->first();
    //     return view('areas/edit_areas', $data);
    // }
    // public function update_areas()
    // {
    //     $session = \Config\Services::session();
    //     $areas_model = new AreasModel();
    //     $id = $this->request->getVar('area_id');
    //     $data = [
    //         'area_name' => $this->request->getVar('area_name'),
    //         'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
    //     ];
    //     $areas_model->update($id, $data);
    //     $session->setFlashdata('status', 'Area updated Successfully');
    //     return $this->response->redirect(base_url('/AreasController'));
    // }

    // public function delete_areas()
    // {
    //     $session = \Config\Services::session();

    //     $areas_model = new AreasModel();

    //     $areas_model->delete($this->request->getVar('area_id'));
    //     $session->setFlashdata('status', 'Area deleted Successfully');
    //     $message = ['status' => 'Deleted'];
    //     return $this->response->setJSON($message);
    // }

    // public function check_duplicate()
    // {
    //     $areas_model = new AreasModel();
    //     $area=$this->request->getVar('area');

    //     $area_check = $areas_model->where('area_name', $area)->first();
    //    if(count($area_check)>0){
    //     $message = ['status' => 'Duplicate '];
    //     // return false;
    //    }
    //    else{
    //     $message = ['status' => 'NoDuplicate'];
    //    } 
    //     return $this->response->setJSON($message);

    // }
}