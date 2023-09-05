<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bhn_BajuModel;


class Bhn_BajuController extends BaseController
{
    protected $Bhn_BajuModel;

    public function __construct()
    {
        $this->Bhn_BajuModel = new Bhn_BajuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Bahan Baju Management',
            'page_title' => 'Bahan Baju List',
            'bahans_baju' => $this->Bhn_BajuModel->findAll()
        ];
        return view('bhn_baju/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Bahan Baju Management',
            'page_title' => 'Bahan Baju list',
        ];

        return view('bhn_baju/create', $data);
    }

    public function store()
    {
        $bhn_baju = $this->request->getPost('bhn_baju');

        $new_bhn_baju = [
            'bhn_baju' => $bhn_baju,
        ];

        $insert_bhn_baju = $this->Bhn_BajuModel->insert($new_bhn_baju);
        return redirect()->to('bhn_baju');
    }

    public function edit($bhn_baju_id)
    {
        $data = [
            'title' => 'Bahan Baju Management',
            'page_title' => 'Edit Bahan Baju',
            'bhn_baju' => $this->Bhn_BajuModel->find($bhn_baju_id)
        ];
        return view('bhn_baju/edit', $data);
    }

    public function update()
    {
        $bhn_baju_id = $this->request->getPost('bhn_baju_id');
        $bhn_baju = $this->request->getPost('bhn_baju');

        $edit_bhn_baju = [
            'bhn_baju' => $bhn_baju,
        ];

        $update_bhn_baju = $this->Bhn_BajuModel->update($bhn_baju_id, $edit_bhn_baju);
        return redirect()->to('bhn_baju');
    }

    public function delete($bhn_baju_id)
    {
        $this->Bhn_BajuModel->delete($bhn_baju_id);
        return redirect()->to('bhn_baju');
    }
}