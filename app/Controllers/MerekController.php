<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MerekModel;


class MerekController extends BaseController
{
    protected $MerekModel;

    public function __construct()
    {
        $this->MerekModel = new MerekModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Merek Management',
            'page_title' => 'Merek List',
            'mereks' => $this->MerekModel->findAll()
        ];
        return view('merek/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Merek Management',
            'page_title' => 'Merek List',
        ];

        return view('merek/create', $data);
    }

    public function store()
    {
        $merek = $this->request->getPost('merek');

        $new_merek = [
            'merek' => $merek,
        ];

        $insert_merek = $this->MerekModel->insert($new_merek);
        return redirect()->to('merek');
    }

    public function edit($merek_id)
    {
        $data = [
            'title' => 'Merek Management',
            'page_title' => 'Edit Merek',
            'merek' => $this->MerekModel->find($merek_id)
        ];
        return view('merek/edit', $data);
    }

    public function update()
    {
        $merek_id = $this->request->getPost('merek_id');
        $merek = $this->request->getPost('merek');

        $edit_merek = [
            'merek' => $merek,
        ];

        $update_merek = $this->MerekModel->update($merek_id, $edit_merek);
        return redirect()->to('merek');
    }

    public function delete($merek_id)
    {
        $this->MerekModel->delete($merek_id);
        return redirect()->to('merek');
    }
}
