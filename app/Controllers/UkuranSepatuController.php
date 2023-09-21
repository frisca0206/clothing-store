<?php

namespace App\controllers;

use App\controllers\BaseController;
use App\Models\UkuranSepatuModel;

class UkuranSepatuController extends BaseController
{
    protected $UkuranSepatuModel;

    public function __construct()
    {
        $this->UkuranSepatuModel = new UkuranSepatuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Shoes Size Management',
            'page_title' => 'Shoes Size List',
            'shoes' => $this->UkuranSepatuModel->findAll()
        ];
        return view('ukuran_sepatu/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Shoes Size Management',
            'page_title' => 'Create Size',
        ];

        return view('ukuran_sepatu/create', $data);
    }

    public function store()
    {
        $ukuran_sepatu = $this->request->getPost('ukuran_sepatu');

        $new_ukuran_sepatu = [
            'ukuran_sepatu' => $ukuran_sepatu,
        ];

        $insert_ukuran_sepatu = $this->UkuranSepatuModel->insert($new_ukuran_sepatu);
        return redirect()->to('ukuran_sepatu');
    }

    public function edit($ukuran_sepatu_id)
    {
        $data = [
            'title' => 'Shoes Size Management',
            'page_title' => 'Edit Size',
            'shoe' => $this->UkuranSepatuModel->find($ukuran_sepatu_id)
        ];
        return view('ukuran_sepatu/edit', $data);
    }

    public function update()
    {
        $ukuran_sepatu_id = $this->request->getPost('ukuran_sepatu_id');
        $ukuran_sepatu = $this->request->getPost('ukuran_sepatu');

        $edit_ukuran_sepatu = [
            'ukuran_sepatu' => $ukuran_sepatu,
        ];

        $update_ukuran_sepatu = $this->UkuranSepatuModel->update($ukuran_sepatu_id, $edit_ukuran_sepatu);
        return redirect()->to('ukuran_sepatu');
    }

    public function delete($ukuran_sepatu_id)
    {
        $this->UkuranSepatuModel->delete($ukuran_sepatu_id);
        return redirect()->to('ukuran_sepatu');
    }
}