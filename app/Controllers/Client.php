<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Client extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $ClientModel= new ClientModel();
        $data['clients'] = $ClientModel->findAll();

        return view('client_index', $data);
    }

    public function create()
    {
        $data['client'] = null;
        return view('client_create', $data);
    }

    public function store()
    {
        $ClientModel = new ClientModel();
        $ClientModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'segment' => $this->request->getVar('segment'),
        ]);
        return redirect()->to('/clients');
    }

    public function edit($id)
    {
        $ClientModel = new ClientModel();
        $data['client'] = $ClientModel->find($id);
        return view('client_edit', $data);
    }

    public function update($id)
    {
        $ClientModel = new ClientModel();
        $ClientModel->update($id, [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'segment' => $this->request->getVar('segment'),
        ]);
        return redirect()->to('/clients');
    }

    public function delete($id)
    {
        $ClientModel = new ClientModel();
        $ClientModel->delete($id);
        return redirect()->to('/clients');
    }
}
