<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;



class DbEtJQuery extends BaseController {

    public function __construct() {

        $this->contactsModel = new ContactModel();

    }

public function index() {

    $listeContacts = $this->contactsModel->orderBy('id','DESC')->paginate(10);

    $data = ['listeContacts' => $listeContacts];

    echo view('common/header');

    echo view('dbjquery',$data);

    echo view('common/footer');

}

}