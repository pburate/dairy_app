<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\AreasModel;

class AreasController extends BaseController
{
    public function index()
    {
        $areas_model = new AreasModel();
        $data['areas'] = $areas_model->findAll();
        return view('areas/view_areas', $data);

    }
    public function add_areas()
    {
        return view('areas/add_areas');
    }


    public function store_areas()
    {

        $areas_model = new AreasModel();
        $data = [
            'area_name' => $this->request->getVar('area_name'),
            'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
            'created_at' => Time::now('Asia/Kolkata', 'en_US'),
        ];
        $areas_model->insert($data);
        return $this->response->redirect(base_url('/AreasController'));
    }

    public function edit_areas($id)
    {
        $areas_model = new AreasModel();
        $data['areas'] = $areas_model->where('area_id', $id)->first();
        return view('areas/edit_areas', $data);
    }
    public function update_areas()
    {
        $areas_model = new AreasModel();
        $id = $this->request->getVar('area_id');
        $data = [
            'area_name' => $this->request->getVar('area_name'),
            'updated_at' => Time::now('Asia/Kolkata', 'en_US'),
        ];
        $areas_model->update($id, $data);
        return $this->response->redirect(base_url('/AreasController'));
    }

    public function delete_areas()
    {
        $areas_model = new AreasModel();

        $areas_model->delete($this->request->getVar('area_id'));
        $message = ['status' => 'Deleted'];
        return $this->response->setJSON($message);
    }

    public function check_duplicate()
    {
        $areas_model = new AreasModel();
        $area=$this->request->getVar('area');
        
        $area_check = $areas_model->where('area_name', $area)->first();
       if(is_array($area_check) && count($area_check)>0){
        $message = ['status' => 'Duplicate'];
       }else{
        $message = ['status' => 'NoDuplicate'];
       } 
        return $this->response->setJSON($message);

    }
}