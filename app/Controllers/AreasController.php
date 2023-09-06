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
            'areas_name' => $this->request->getVar('areas_name'),
            'updated_at'  =>new Time('now'),
            'created_at'  =>new Time('now'),
        ];
        // print_r($data) ;
        // die();
        $areas_model->insert($data);
        return $this->response->redirect(base_url('/AreasController'));
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
            'updated_at'  => new Time('now'),
        ];
        $areas_model->update($id, $data);
        return $this->response->redirect(base_url('/AreasController'));
    }
 
    // delete user
    public function delete_areas(){
        $areas_model = new AreasModel();
        $areas_model->delete($this->request->getVar('areas_id'));
        $message = ['status' => 'Deleted'];
        return $this->response->setJSON($message);
       //  $data = [
       //     'deleted_at' => ,
       // ];
           // $data['user'] = $areas_model->where('areas_id', $id)->delete($id);
         
           // return $this->response->redirect(base_url('/AreasController'));
       }    
}