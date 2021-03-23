<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;

class BaseDeDonnees extends BaseController {

    public function __construct() {

        $this->contactsModel = new ContactModel();

    }

public function index() {

    $listeContacts = $this->contactsModel->orderBy('id','DESC')->paginate(10);

    $data = ['listeContacts' => $listeContacts];

    echo view('database',$data);

}

public function delete($id=null) {

    $contact = $this->contactsModel->where('id',$id)->first();

    $this->contactsModel->where('id',$id)->delete();

    return redirect()->to('/basededonnees/index');

}


}
