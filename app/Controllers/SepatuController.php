<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SepatuModel;
use App\Models\UkuranSepatuModel;
use App\Models\MerekModel;

class SepatuController extends BaseController
{
    protected $SepatuModel;

    public function __construct()
    {
        $this->SepatuModel = new SepatuModel();
        $this->UkuranSepatuModel = new UkuranSepatuModel();
        $this->MerekModel = new MerekModel();
    }

    public function index()
    {
        $shoes = $this->SepatuModel->select('sepatu.*,ukuran_sepatu.ukuran_sepatu,merek.merek')
        ->join('ukuran_sepatu','ukuran_sepatu.id = sepatu.ukuran_sepatu_id')
        ->join('merek','merek.id = sepatu.merek_id')->findAll();

        foreach ($shoes as $key => $shoe){
        $shoes[$key]['harga'] = $this->rupiah($shoe['harga']);
        }

        $data = [
            'title' => 'Shoes Management',
            'page_title' => 'Shoes List',
            'shoes' => $shoes
        ];
        return view('sepatu/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Shoe Management',
            'page_title' => 'Create Shoe',
            'sizes' => $this->UkuranSepatuModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];

        return view('sepatu/create', $data);
    }

    public function store()
    {
        $nama_sepatu = $this->request->getPost('nama_sepatu');
        $ukuran_sepatu = $this->request->getPost('ukuran_sepatu');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $new_sepatu = [
            'nama_sepatu' => $nama_sepatu,
            'ukuran_sepatu_id' => $ukuran_sepatu,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $insert_sepatu = $this->SepatuModel->insert($new_sepatu);
        return redirect()->to('sepatu');
    }

    public function edit($sepatu_id)
    {
        $data = [
            'title' => 'Shoe Management',
            'page_title' => 'Edit Shoe',
            'sepatu' => $this->SepatuModel->find($sepatu_id),
            'sizes' => $this->UkuranSepatuModel->findAll(),
            'mereks' => $this->MerekModel->findAll(),
        ];
        return view('sepatu/edit', $data);
    }

    public function update()
    {
        $sepatu_id = $this->request->getPost('sepatu_id');
        $nama_sepatu = $this->request->getPost('nama_sepatu');
        $ukuran_sepatu = $this->request->getPost('ukuran_sepatu');
        $merek = $this->request->getPost('merek');
        $harga = $this->request->getPost('harga');

        $edit_sepatu = [
            'nama_sepatu' => $nama_sepatu,
            'ukuran_sepatu_id' => $ukuran_sepatu,
            'merek_id' => $merek,
            'harga' => $harga,
        ];

        $update_sepatu = $this->SepatuModel->update($sepatu_id, $edit_sepatu);
        return redirect()->to('sepatu');
    }

    public function delete($sepatu_id)
    {
        $this->SepatuModel->delete($sepatu_id);
        return redirect()->to('sepatu');
    }

    public function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
}