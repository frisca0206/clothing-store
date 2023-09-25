<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PnjlnSepatuModel;
use App\Models\SepatuModel;

class PnjlnSepatuController extends BaseController
{
    protected $PnjlnSepatuModel;

    public function __construct()
    {
        $this->PnjlnSepatuModel = new PnjlnSepatuModel();
        $this->SepatuModel = new SepatuModel();
    }

    public function index()
    {
        $pnjlns_sepatu = $this->PnjlnSepatuModel->select('pnjln_sepatu.*,sepatu.nama_sepatu')
        ->join('sepatu','sepatu.id = pnjln_sepatu.sepatu_id')->findAll();

        $data = [
            'title' => 'Shoes Sales Management',
            'page_title' => 'Shoes Sales List',
            'pnjlns_sepatu' => $pnjlns_sepatu,
        ];
        return view('pnjln_sepatu/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Shoes Sales Management',
            'page_title' => 'Create Shoes Sales',
            'shoes' => $this->SepatuModel->findAll(),
        ];

        return view('pnjln_sepatu/create', $data);
    }

    public function store()
    {
        $sepatu = $this->request->getPost('nama_sepatu');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $new_pnjln_sepatu = [
            'sepatu_id' => $sepatu,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $insert_pnjln_sepatu = $this->PnjlnSepatuModel->insert($new_pnjln_sepatu);
        return redirect()->to('pnjln_sepatu');
    }

    public function edit($pnjln_sepatu_id)
    {
        $data = [
            'title' => 'Shoes Sales Management',
            'page_title' => 'Edit Shoes Sales',
            'pnjln_sepatu' => $this->PnjlnSepatuModel->find($pnjln_sepatu_id),
            'shoes' => $this->SepatuModel->findAll(),
        ];
        return view('pnjln_sepatu/edit', $data);
    }

    public function update()
    {
        $pnjln_sepatu_id = $this->request->getPost('pnjln_sepatu_id');
        $sepatu = $this->request->getPost('nama_sepatu');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $edit_pnjln_sepatu = [
            'sepatu_id' =>$sepatu,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $update_pnjln_sepatu = $this->PnjlnSepatuModel->update($pnjln_sepatu_id, $edit_pnjln_sepatu);
        return redirect()->to('pnjln_sepatu');
    }

    public function delete($pnjln_sepatu_id)
    {
        $this->PnjlnSepatuModel->delete($pnjln_sepatu_id);
        return redirect()->to('pnjln_sepatu');
    }
}