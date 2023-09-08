<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Stok_BajuModel;
use App\Models\BajuModel;
use App\Models\GudangModel;


class Stok_BajuController extends BaseController
{
    protected $Stok_BajuModel;

    public function __construct()
    {
        $this->Stok_BajuModel = new Stok_BajuModel();
        $this->BajuModel = new BajuModel();
        $this->GudangModel = new GudangModel();
    }

    public function index()
    {
        $stoks_baju = $this->Stok_BajuModel->select('stok_baju.*,baju.nama_baju,gudang.gudang')
        ->join('baju','baju.id = stok_baju.baju_id')
        ->join('gudang','gudang.id = stok_baju.gudang_id')->findAll();

        $data = [
            'title' => 'Stock of T-shirts Management',
            'page_title' => 'Stock of T-shirts List',
            'stoks_baju' => $stoks_baju,
        ];
        return view('stok_baju/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Stock of T-shirts Management',
            'page_title' => 'Create Stock of T-shirts',
            'shirts' => $this->BajuModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];

        return view('stok_baju/create', $data);
    }

    public function store()
    {
        $baju = $this->request->getPost('nama_baju');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $new_stok_baju = [
            'baju_id' => $baju,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok,
        ];

        $insert_stok_baju = $this->Stok_BajuModel->insert($new_stok_baju);
        return redirect()->to('stok_baju');
     }

     public function edit($stok_baju_id)
     {
        $data = [
            'title' => 'Stock of T-shirts Management',
            'page_title' => 'Edit Stock of T-shirts',
            'stok_baju' => $this->Stok_BajuModel->find($stok_baju_id),
            'shirts' => $this->BajuModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];
        return view('stok_baju/edit', $data);
     }

     public function update()
     {
        $stok_baju_id = $this->request->getPost('stok_baju_id');
        $baju = $this->request->getPost('nama_baju');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $edit_stok_baju = [
            'baju_id' => $baju,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok,
        ];

        $update_stok_baju = $this->Stok_BajuModel->update($stok_baju_id, $edit_stok_baju);
        return redirect()->to('stok_baju');
     }

     public function delete($stok_baju_id)
     {
        $this->Stok_BajuModel->delete($stok_baju_id);
        return redirect()->to('stok_baju');
     }
}