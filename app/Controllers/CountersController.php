<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\CountersModel;

class CountersController extends BaseController
{
    public function index()
    {
            $counter_model = new CountersModel();
            $data['counters'] = $counter_model->findAll();
            return view('counters/view_counters', $data);
    }
   
    public function add_counters()
    {
        return view('counters/add_counters');
    }

    
    public function store_counters()
    {
        
        $areas_model = new CountersModel();
        $data = [
            'counter_name' => $this->request->getVar('counter_name'),
            'counter_value' => $this->request->getVar('counter_value'),
        ];
        $areas_model->insert($data);
        return $this->response->redirect(base_url('/CountersController'));
    }

    public function edit_counters($id=null){
     $counter_model = new CountersModel();
        $data['counters'] = $counter_model->where('counter_info_id', $id)->first();
        return view('counters/edit_counters', $data);
    }
    // update user data
    public function update_counters(){
     $counter_model = new CountersModel();
        $id = $this->request->getVar('counter_info_id');
        $data = [
            'counter_value' => $this->request->getVar('counter_value'),
        ];
        $counter_model->update($id, $data);
        return $this->response->redirect(base_url('/CountersController'));
    }

}