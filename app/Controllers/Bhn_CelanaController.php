<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bhn_CelanaModel;


class Bhn_CelanaController extends BaseController
{
    protected $Bhn_CelanaModel;

    public function __construct()
    {
        $this->Bhn_CelanaModel = new Bhn_CelanaModel();
    }

    public function index()
    {
        $data = [
            'title'=>'Pants Material Management',
            'page_title' => 'Pants Material List',
            'bahans_celana' => $this->Bhn_CelanaModel->findAll()
        ];
        return view('bhn_celana/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pants Material Management',
            'page_title' => 'Pants Material List',
        ];

        return view('bhn_celana/create', $data);
    }

    public function store()
    {
        $bhn_celana = $this->request->getPost('bhn_celana');

        $new_bhn_celana = [
            'bhn_celana' => $bhn_celana,
        ];

        $insert_bhn_celana = $this->Bhn_CelanaModel->insert($new_bhn_celana);
        return redirect()->to('bhn_celana');
   }

   public function edit($bhn_celana_id)
   {
        $data = [
            'title' => 'Pants Material Management',
            'page_title' => 'Edit Pants Material',
            'bhn_celana' => $this->Bhn_CelanaModel->find($bhn_celana_id)
        ];
        return view('bhn_celana/edit', $data);
   }

   public function update()
   {
        $bhn_celana_id = $this->request->getPost('bhn_celana_id');
        $bhn_celana = $this->request->getPost('bhn_celana');

        $edit_bhn_celana = [
            'bhn_celana' => $bhn_celana,
        ];

        $update_bhn_celana = $this->Bhn_CelanaModel->update($bhn_celana_id, $edit_bhn_celana);
        return redirect()->to('bhn_celana');
   }

   public function delete($bhn_celana_id)
   {
        $this->Bhn_CelanaModel->delete($bhn_celana_id);
        return redirect()->to('bhn_celana');
   }
}