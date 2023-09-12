<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PnjlnCelanaModel;
use App\Models\CelanaModel;

class PnjlnCelanaController extends BaseController
{
    protected $PnjlnCelanaModel;

    public function __construct()
    {
        $this->PnjlnCelanaModel = new PnjlnCelanaModel();
        $this->CelanaModel = new CelanaModel();
    }

    public function index()
    {
        $pnjlns_celana = $this->PnjlnCelanaModel->select('pnjln_celana.*,celana.nama_celana')
        ->join('celana','celana.id = pnjln_celana.celana_id')->findAll();

        $data = [
            'title' => 'Pants Sales Management',
            'page_title' => 'Pants Sales List',
            'pnjlns_celana' => $pnjlns_celana
        ];
        return view('pnjln_celana/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pants Sales Management',
            'page_title' => 'Create Pants Sales',
            'trousers' => $this->CelanaModel->findAll(),
        ];

        return view('pnjln_celana/create', $data);
    }

    public function store()
    {
        $celana = $this->request->getPost('nama_celana');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $new_pnjln_celana = [
            'celana_id' => $celana,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $insert_pnjln_celana = $this->PnjlnCelanaModel->insert($new_pnjln_celana);
        return redirect()->to('pnjln_celana');
    }

    public function edit($pnjln_celana_id)
    {
        $data = [
            'title' => 'Pants Sales Management',
            'page_title' => 'Edit Pants Sales',
            'pnjln_celana' => $this->PnjlnCelanaModel->find($pnjln_celana_id),
            'trousers' => $this->CelanaModel->findAll(),
        ];
        return view('pnjln_celana/edit', $data);
    }

    public function update()
    {
        $pnjln_celana_id = $this->request->getPost('pnjln_celana_id');
        $celana = $this->request->getPost('nama_celana');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $edit_pnjln_celana = [
            'celana_id' => $celana,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $update_pnjln_celana = $this->PnjlnCelanaModel->update($pnjln_celana_id, $edit_pnjln_celana);
        return redirect()->to('pnjln_celana');
    }

    public function delete($pnjln_celana_id)
    {
        $this->PnjlnCelanaModel->delete($pnjln_celana_id);
        return redirect()->to('pnjln_celana');
    }
}