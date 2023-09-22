<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StokSepatuModel;
use App\Models\SepatuModel;
use App\Models\GudangModel;

class StokSepatuController extends BaseController
{
    protected $StokSepatuModel;

    public function __construct()
    {
        $this->StokSepatuModel = new StokSepatuModel();
        $this->SepatuModel = new SepatuModel();
        $this->GudangModel = new GudangModel();
    }

    public function index()
    {
        $stoks_sepatu = $this->StokSepatuModel->select('stok_sepatu.*,sepatu.nama_sepatu,gudang.gudang')
        ->join('sepatu','sepatu.id = stok_sepatu.sepatu_id')
        ->join('gudang','gudang.id = stok_sepatu.gudang_id')->findAll();

        $data = [
            'title' => 'Stock Of Shoes Management',
            'page_title' => 'Stock Of Shoes List',
            'stoks_sepatu' => $stoks_sepatu,
        ];
        return view('stok_sepatu/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Stock of Shoes Management',
            'page_title' => 'Create Stock of Shoes',
            'shoes' => $this->SepatuModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];

        return view('stok_sepatu/create', $data);
    }

    public function store()
    {
        $sepatu = $this->request->getPost('nama_sepatu');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $new_stok_sepatu = [
            'sepatu_id' => $sepatu,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok
        ];

        $insert_stok_sepatu = $this->StokSepatuModel->insert($new_stok_sepatu);
        return redirect()->to('stok_sepatu');
    }

    public function edit($stok_sepatu_id)
    {
        $data = [
            'title' => 'Stock Of Shoes Management',
            'page_title' => 'Edit Stock Of Shoes',
            'stok_sepatu' => $this->StokSepatuModel->find($stok_sepatu_id),
            'shoes' => $this->SepatuModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];
        return view('stok_sepatu/edit', $data);
    }

    public function update()
    {
        $stok_sepatu_id = $this->request->getPost('stok_sepatu_id');
        $sepatu = $this->request->getPost('nama_sepatu');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $edit_stok_sepatu = [
            'sepatu_id' => $sepatu,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok,
        ];
  
        $update_stok_sepatu = $this->StokSepatuModel->update($stok_sepatu_id, $edit_stok_sepatu);
        return redirect()->to('stok_sepatu');
    }

    public function delete($stok_sepatu_id)
    {
        $this->StokSepatuModel->delete($stok_sepatu_id);
        return redirect()->to('stok_sepatu');
    }
}