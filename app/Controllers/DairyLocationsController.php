<?php

namespace App\Controllers;
use App\Models\DairyLocationsModel;

class DairyLocationsController extends BaseController{
       public function index(){

        if (auth()->loggedIn()) {
              $dairy_location_model = new DairyLocationsModel();
              $data['location'] = $dairy_location_model->findAll();   
        return view("dairy_locations/view_dairy_location",$data);
       }
       else {
              return redirect()->to('/login');
          }
       }

    //    add dairy location
       public function add_dairy_location()
    {
        return view('dairy_locations/add_dairy_location');
    }

    public function store_dairy_location()
    {
       $session = \Config\Services::session();
       $dairy_location_model = new DairyLocationsModel();
        $data = [
            'location_name' => $this->request->getPost('location_name'),
        ];
        print_r($data); 
        $dairy_location_model->save($data);
        $session->setFlashdata('status', 'Location inserted Successfully !');
        return $this->response->redirect(base_url('/DairyLocationsController'));
    }

    //delete dairy Location
    public function delete_dairy_location($id){
        $session = \Config\Services::session();
       $dairy_location_model = new DairyLocationsModel();
            $dairy_location_model->delete($id);
$session->setFlashdata('status', ' Location deleted Successfully !');
        return $this->response->redirect(base_url('/DairyLocationsController'));
    }

    //Edit view
    public function edit_dairy_location($id){
     
       $dairy_location_model = new DairyLocationsModel();
        $data['locations'] = $dairy_location_model->find($id);
        return view('dairy_locations/edit_dairy_location',$data);
    }

    //Edit
    public function update_location(){
        $session = \Config\Services::session();
       $dairy_location_model = new DairyLocationsModel();
        $id = $this->request->getPost('location_id');
        $data = [
            'location_name' => $this->request->getPost('location_name'),
        ];
        $dairy_location_model->update($id, $data);
        $session->setFlashdata('status', 'Location updated Successfully !');
        return $this->response->redirect(base_url('/DairyLocationsController'));
    }
}






?>