<?php

namespace App\Controllers;
use App\Models\TaxesModel;
 
class TaxesController extends BaseController{
   
    public function index(){

        if (auth()->loggedIn()) {
              $taxes_model = new TaxesModel();
              $data['taxes'] = $taxes_model->findAll();  
            //   print_r($data);
        return view("taxes/view_taxes",$data);
       }
       else {
              return redirect()->to('/login');
          }
       }

       //add tax
    public function add_taxes()
    {
        return view('taxes/add_taxes');
    }

    public function store_taxes()
    {
        $taxes_model = new TaxesModel();
        $session = \Config\Services::session();
        $data = [
            'tax_name' => $this->request->getPost('tax_name'),
            'tax_percentage' => $this->request->getPost('tax_percentage'),
            'tax_reg_number' => $this->request->getPost('tax_reg_number'),
            'hsn_code' => $this->request->getPost('hsn_code'),
        ];
        $taxes_model->save($data);
$session->setFlashdata('status', 'Tax inserted Successfully !');
        return $this->response->redirect(base_url('/TaxesController'));
    }

    //delete tax

    public function delete_tax($id){
        $taxes_model = new TaxesModel();
        $session = \Config\Services::session();
         $taxes_model->delete($id);
$session->setFlashdata('status', 'Tax deleted Successfully !');
return $this->response->redirect(base_url('/TaxesController'));

    }

    public function edit_tax($id){
        $taxes_model = new TaxesModel();
        $data['taxes'] = $taxes_model->find($id);
        return view('taxes/edit_taxes',$data);
    }

    //Edit tax
    public function update_tax(){
        $taxes_model = new TaxesModel();
        $session = \Config\Services::session();

        $id = $this->request->getPost('tax_info_id');
        $data = [
            'tax_name' => $this->request->getPost('tax_name'),
            'tax_percentage' => $this->request->getPost('tax_percentage'),
            'tax_reg_number' => $this->request->getPost('tax_reg_number'),
            'hsn_code' => $this->request->getPost('hsn_code'),
        ];
        $taxes_model->update($id, $data);
$session->setFlashdata('status', 'Tax updated Successfully !');
        return $this->response->redirect(base_url('/TaxesController'));
    }
}

?>