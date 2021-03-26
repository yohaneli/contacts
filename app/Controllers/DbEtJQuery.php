<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;



class DbEtJQuery extends BaseController {

    public function __construct() {

        $this->contactsModel = new ContactModel();

        parent::__construct();

		$this->client = \Config\Services::curlrequest();

    }

public function index() {

    // $listeContacts = $this->contactsModel->orderBy('id','DESC')->paginate(10);

    // $data = ['listeContacts' => $listeContacts];

    // echo view('common/header');

    // echo view('dbjquery',$data);

    // echo view('common/footer');

    $listContacts = $this->client->request('POST', 'http://contacts/api', [
        'form_params' => [
                'paginate' => 5,
                'type' => '',
                'elements' => '',
        ]
    ]);

    $contacts = json_decode($listContacts->getBody());

    $data = ['contacts' => $contacts];

    echo view('Common/Header');
    echo view('dbjquery',$data);
    echo view('Common/Footer');

}

}