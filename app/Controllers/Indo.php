<?php

namespace App\Controllers;

use App\Models\IndoModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Validation\StrictRules\Rules;

class Indo extends BaseController
{

    protected $product;


    function __construct()
    {
        $this->product = new IndoModel();
    }
    public function index()
    {
        $product = new IndoModel();

        $data['productx'] = $product->findAll();

        echo view('indonesia', $data);
    }

    public function add()
    {
        return view('indo-add');
    }

    public function save()
    {
        if (!$this->validate(
            [
                'id_barang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'ID Barang harus diisi'
                    ]
                ],
                'nama_barang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Barang harus diisi'
                    ]
                ],
                'penerima' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'penerima harus diisi'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'alamat harus diisi'
                    ]
                ],
            ]
        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        };

        $this->product->insert([
            'id_barang' => $this->request->getVar('id_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'penerima' => $this->request->getVar('penerima'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('success', 'Data Produc berhasil ditambahkan');
        return redirect()->to('/indo');
    }

    public function edit($id)
    {
        $dataProduct = $this->product->find($id);
        if (empty($dataProduct)) {
            throw new PageNotFoundException('Page Not Found');
        }

        $data['product'] = $dataProduct;
        return view('indo-edit', $data);
    }

    public function saveEdit($id)
    {
        if (!$this->validate(
            [
                'nama_barang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Barang harus diisi'
                    ]
                ],
                'penerima' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'penerima harus diisi'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'alamat harus diisi'
                    ]
                ],
            ]
        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        };

        $this->product->update($id, [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'penerima' => $this->request->getVar('penerima'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('success', 'Data  berhasil diperbaiki');
        return redirect()->to('/indo');
    }
    public function delete($id)
    {
        $dataProduct = $this->product->find($id);
        if (empty($dataProduct)) {
            throw new PageNotFoundException('Page Not Found');
        }

        $this->product->delete($id);
        session()->setFlashdata('success', 'Data Product berhasil dihapus');
        return redirect()->to('/indo');
    }
}




