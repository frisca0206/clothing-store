<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PnjlnBajuModel;
use App\Models\BajuModel;

class PnjlnBajuController extends BaseController
{
    protected $PnjlnBajuModel;

    public function __construct()
    {
        $this->PnjlnBajuModel = new PnjlnBajuModel();
        $this->BajuModel = new BajuModel();
    }

    public function index()
    {
        $pnjlns_baju = $this->PnjlnBajuModel->select('pnjln_baju.*,baju.nama_baju')
        ->join('baju','baju.id = pnjln_baju.baju_id')->findAll();

        $data = [
            'title' => 'T-shirt Sales Management',
            'page_title' => 'T-shirt Sales List',
            'pnjlns_baju' => $pnjlns_baju
        ];
        return view('pnjln_baju/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'T-shirt Sales Management',
            'page_title' => 'Create T-shirt Sales',
            'shirts' => $this->BajuModel->findAll(),
        ];

        return view('pnjln_baju/create', $data);
    }

    public function store()
    {
        $baju = $this->request->getPost('nama_baju');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $new_pnjln_baju = [
            'baju_id' => $baju,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $insert_pnjln_baju = $this->PnjlnBajuModel->insert($new_pnjln_baju);
        return redirect()->to('pnjln_baju');
    }

    public function edit($pnjln_baju_id)
    {
        $data = [
            'title' => 'T-shirt Sales Management',
            'page_title' => 'Edit T-shirt Sales',
            'pnjln_baju' => $this->PnjlnBajuModel->find($pnjln_baju_id),
            'shirts' => $this->BajuModel->findAll(),
        ];
        return view('pnjln_baju/edit', $data);
    }

    public function update()
    {
        $pnjln_baju_id = $this->request->getPost('pnjln_baju_id');
        $baju = $this->request->getPost('nama_baju');
        $tanggal = $this->request->getPost('tanggal');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $jumlah_item = $this->request->getPost('jumlah_item');
        $ttl_harga = $this->request->getPost('ttl_harga');
        $ttl_dibayarkan = $this->request->getPost('ttl_dibayarkan');
        $ttl_kembalian = $this->request->getPost('ttl_kembalian');

        $edit_pnjln_baju = [
            'baju_id' => $baju,
            'tanggal' => $tanggal,
            'nama_pembeli' => $nama_pembeli,
            'jumlah_item' => $jumlah_item,
            'ttl_harga' => $ttl_harga,
            'ttl_dibayarkan' => $ttl_dibayarkan,
            'ttl_kembalian' => $ttl_kembalian,
        ];

        $update_pnjln_baju = $this->PnjlnBajuModel->update($pnjln_baju_id, $edit_pnjln_baju);
        return redirect()->to('pnjln_baju');
    }

    public function delete($pnjln_baju_id)
    {
        $this->PnjlnBajuModel->delete($pnjln_baju_id);
        return redirect()->to('pnjln_baju');
    }
}