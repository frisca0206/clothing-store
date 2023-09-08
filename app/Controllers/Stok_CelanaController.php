<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Stok_CelanaModel;
use App\Models\CelanaModel;
use App\Models\GudangModel;


class Stok_CelanaController extends BaseController
{
    protected $Stok_CelanaModel;

    public function __construct()
    {
        $this->Stok_CelanaModel =  new Stok_CelanaModel();
        $this->CelanaModel = new CelanaModel();
        $this->GudangModel = new GudangModel();
    }

    public function index()
    {
        $stocks_celana = $this->Stok_CelanaModel->select('stok_celana.*,celana.nama_celana,gudang.gudang')
        ->join('celana','celana.id = stok_celana.celana_id')
        ->join('gudang','gudang.id = stok_celana.gudang_id')->findAll();

        $data = [
            'title' => 'Stock of Pants Management',
            'page_title' => 'Stock of Pants List',
            'stoks_celana' => $stocks_celana
        ];
        return view('stok_celana/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Stock of Pants Management',
            'page_title' => 'Create Stock of Pants',
            'trousers' => $this->CelanaModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];

        return view('stok_celana/create', $data);
    }

    public function store()
    {
        $celana = $this->request->getPost('nama_celana');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $new_stok_celana = [
            'celana_id' => $celana,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok
        ];

        $insert_stok_celana = $this->Stok_CelanaModel->insert($new_stok_celana);
        return redirect()->to('stok_celana');
    }

    public function edit($stok_celana_id)
    {
        $data = [
            'title' => 'Stock of Pants Management',
            'page_title' => 'Edit Stock of Pants',
            'stok_celana' => $this->Stok_CelanaModel->find($stok_celana_id),
            'trousers' => $this->CelanaModel->findAll(),
            'gudangs' => $this->GudangModel->findAll(),
        ];
        return view('stok_celana/edit', $data);
    }

    public function update()
    {
        $stok_celana_id = $this->request->getPost('stok_celana_id');
        $celana = $this->request->getPost('nama_celana');
        $gudang = $this->request->getPost('gudang');
        $jumlah_stok = $this->request->getPost('jumlah_stok');

        $edit_stok_celana = [
            'celana_id' => $celana,
            'gudang_id' => $gudang,
            'jumlah_stok' => $jumlah_stok,
        ];

        $update_stok_celana = $this->Stok_CelanaModel->update($stok_celana_id, $edit_stok_celana);
        return redirect()->to('stok_celana');
    }

    public function delete($stok_celana_id)
    {
        $this->Stok_CelanaModel->delete($stok_celana_id);
        return redirect()->to('stok_celana');
    }
}