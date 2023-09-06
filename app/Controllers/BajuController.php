<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BajuModel;
use App\Models\Bhn_BajuModel;
use App\Models\MerekModel;


class BajuController extends BaseController
{
    protected $BajuModel;

    public function __construct()
    {
        $this->BajuModel = new BajuModel();
        $this->Bhn_BajuModel = new Bhn_BajuModel();
        $this->MerekModel = new MerekModel();
    }

    public function index()
    {
        $shirts = $this->BajuModel->select('baju.*,bhn_baju.bhn_baju,merek.merek')
        ->join('bhn_baju','bhn_baju.id = baju.bhn_baju_id')
        ->join('merek','merek.id = baju.merek_id')->findAll();

        $data = [
            'title' => 'Baju Management',
            'page_title' => 'Baju List',
            'shirts' => $shirts
        ];
        return view('baju/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Baju Management',
            'page_title' => 'Baju List',
            'bahans_baju' => $this->Bhn_BajuModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];

        return view('baju/create', $data);
    }

    public function store()
    {
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $bhn_baju = $this->request->getPost('bhn_baju');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $new_baju = [
            'nama_pembeli' => $nama_pembeli,
            'bhn_baju_id' => $bhn_baju,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $insert_baju = $this->BajuModel->insert($new_baju);
        return redirect()->to('baju');
    }

    public function edit($baju_id)
    {
        $data = [
            'title' => 'Baju Management',
            'page_title' => 'Edit Baju',
            'baju' => $this->BajuModel->find($baju_id),
            'bahans_baju' => $this->Bhn_BajuModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];
        return view('baju/edit', $data);
    }

    public function update()
    {
        $baju_id = $this->request->getPost('baju_id');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $bhn_baju = $this->request->getPost('bhn_baju');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $edit_baju = [
            'nama_pembeli' => $nama_pembeli,
            'bhn_baju_id' => $bhn_baju,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $update_baju = $this->BajuModel->update($baju_id, $edit_baju);
        return redirect()->to('baju');
    }

    public function delete($baju_id)
    {
        $this->BajuModel->delete($baju_id);
        return redirect()->to('baju');
    }
}