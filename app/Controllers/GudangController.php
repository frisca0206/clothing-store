<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GudangModel;

class GudangController extends BaseController
{
    protected $GudangModel;

    public function __construct()
    {
        $this->GudangModel = new GudangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Warehouse Management',
            'page_title' => 'Warehouse List',
            'gudangs' => $this->GudangModel->findAll()
        ];
        return view('gudang/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Warehouse Management',
            'page_title' => 'Create Warehouse',
        ];

        return view('gudang/create', $data);
    }

    public function store()
    {
        $gudang = $this->request->getPost('gudang');
        $deskripsi = $this->request->getPost('deskripsi');

        $new_gudang = [
            'gudang' => $gudang,
            'deskripsi' => $deskripsi,
        ];

        $insert_gudang = $this->GudangModel->insert($new_gudang);
        return redirect()->to('gudang');
    }

    public function edit($gudang_id)
    {
        $data = [
            'title' => 'Warehouse Management',
            'page_title' => 'Edit Warehouse',
            'gudang' => $this->GudangModel->find($gudang_id)
        ];
        return view('gudang/edit', $data);
    }

    public function update()
    {
        $gudang_id = $this->request->getPost('gudang_id');
        $gudang = $this->request->getPost('gudang');
        $deskripsi = $this->request->getPost('deskripsi');

        $edit_gudang = [
            'gudang' => $gudang,
            'deskripsi' => $deskripsi,
        ];

        $update_gudang = $this->GudangModel->update($gudang_id, $edit_gudang);
        return redirect()->to('gudang');
    }

    public function delete($gudang_id)
    {
        $this->GudangModel->delete($gudang_id);
        return redirect()->to('gudang');
    }
}