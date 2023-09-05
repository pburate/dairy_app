<?php

namespace App\Controllers;

use App\Models\AreasModel;

class Areas extends BaseController
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
            'areas_name' => $this->request->getVar('areas_name'),
            // 'created_at'  => $this->request->getVar('created_at'),
        ];
        // print_r($data) ;
        // die();
        $areas_model->insert($data);
        return $this->response->redirect(base_url('/areas'));
    }

    public function edit_areas($id=null){
     $areas_model = new AreasModel();
        $data['areas'] = $areas_model->where('areas_id', $id)->first();
        return view('Areas/edit_areas', $data);
    }
    // update user data
    public function update_areas(){
     $areas_model = new AreasModel();
        $id = $this->request->getVar('areas_id');
        $data = [
            'areas_name' => $this->request->getVar('areas_name'),
            // 'update_at'  => 
        ];
        $areas_model->update($id, $data);
        return $this->response->redirect(base_url('/areas'));
    }
 
    // delete user
    public function delete_areas($id = null){
     $areas_model = new AreasModel();
    //  $data = [
    //     'deleted_at' => ,
    // ];
        $data['user'] = $areas_model->where('areas_id', $id)->delete($id);
      
        return $this->response->redirect(base_url('/areas'));
    }    
}