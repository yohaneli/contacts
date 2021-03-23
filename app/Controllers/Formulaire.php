<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;

class Formulaire extends BaseController {

    public function __construct() {

		$this->contactsModel = new ContactModel();

    }

    public function index() {

        helper('form');

        $rules = [
            'nom' => 'required',
            'prenom' => 'required|min_length[3]',
            'mail' => 'required'
        ];

                
            if($this->validate($rules)) { 

                // $nom = $this->request->getVar('nom');

                // $prenom = $this->request->getVar('prenom');

                $datasave = [
                    'last_Name'=>$this->request->getVar('nom'),
                    'first_Name'=>$this->request->getVar('prenom'),
                    'email'=>$this->request->getVar('mail')
                ];

                $this->contactsModel->save($datasave);
  
            }

        $data = ['validation'=>$this->validator,
                  'request'  =>$this->request
                ];

        echo view('formulaire',$data);

    }

}