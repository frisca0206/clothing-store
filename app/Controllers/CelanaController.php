<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CelanaModel;
use App\Models\Bhn_CelanaModel;
use App\Models\MerekModel;


class CelanaController extends BaseController
{
    protected $CelanaModel;

    public function __construct()
    {
        $this->CelanaModel = new CelanaModel();
        $this->Bhn_CelanaModel = new Bhn_CelanaModel();
        $this->MerekModel = new MerekModel();
    }

    public function index()
    {
        $trousers = $this->CelanaModel->select('celana.*,bhn_celana.bhn_celana,merek.merek')
        ->join('bhn_celana','bhn_celana.id = celana.bhn_celana_id')
        ->join('merek','merek.id = celana.merek_id')->findAll();
    
        $data = [
            'title' => 'Celana Management',
            'page_title' => 'Celana List',
            'trousers' => $trousers
        ];
        return view('celana/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Celana Management',
            'page_title' => 'Create Celana',
            'bahans_celana' => $this->Bhn_CelanaModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];

        return view('celana/create', $data);
    }

    public function store()
    {
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $bhn_celana = $this->request->getPost('bhn_celana');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $new_celana = [
            'nama_pembeli' => $nama_pembeli,
            'bhn_celana_id' => $bhn_celana,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $insert_celana = $this->CelanaModel->insert($new_celana);
        return redirect()->to('celana');
    }

    public function edit($celana_id)
    {
        $data = [
            'title' => 'Celana Management',
            'page_title' => 'Edit Celana',
            'celana' => $this->CelanaModel->find($celana_id),
            'bahans_celana' => $this->Bhn_CelanaModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];
        return view('celana/edit', $data);
    }

    public function update()
    {
        $celana_id = $this->request->getPost('celana_id');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $bhn_celana = $this->request->getPost('bhn_celana');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $edit_celana = [
            'nama_pembeli' => $nama_pembeli,
            'bhn_celana_id' => $bhn_celana,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $update_celana = $this->CelanaModel->update($celana_id, $edit_celana);
        return redirect()->to('celana');
    }

    public function delete($celana_id)
    {
        $this->CelanaModel->delete($celana_id);
        return redirect()->to('celana');
    }
}