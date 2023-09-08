<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\AreasModel;

class AreasController extends BaseController
{
    public function index()
    {
        if (auth()->loggedIn()) {
            $areas_model = new AreasModel();
            $data['areas'] = $areas_model->findAll();
            return view('Areas/view_areas', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function add_areas()
    {
        return view('Areas/add_areas');
    }

    
    public function store_areas()
    {
        
        $areas_model = new AreasModel();
        $data = [
            'area_name' => $this->request->getVar('area_name'),
            'updated_at'  => Time::now('Asia/Kolkata', 'en_US'),
            'created_at'  => Time::now('Asia/Kolkata', 'en_US'),
        ];
        $areas_model->insert($data);
        return $this->response->redirect(base_url('/AreasController'));
    }

    public function edit_areas($id=null){
     $areas_model = new AreasModel();
        $data['areas'] = $areas_model->where('area_id', $id)->first();
        return view('Areas/edit_areas', $data);
    }
    public function update_areas(){
     $areas_model = new AreasModel();
        $id = $this->request->getVar('area_id');
        $data = [
            'area_name' => $this->request->getVar('area_name'),
            'updated_at'  =>  Time::now('Asia/Kolkata', 'en_US'),
        ];
        $areas_model->update($id, $data);
        return $this->response->redirect(base_url('/AreasController'));
    }
 
    public function delete_areas(){
        $areas_model = new AreasModel();
        $areas_model->delete($this->request->getVar('area_id'));
        $message = ['status' => 'Deleted'];
        return $this->response->setJSON($message);
       }    
}