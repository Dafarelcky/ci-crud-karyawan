<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class Admin extends BaseController
{
    protected $karyawan;
    function __construct()
    {
        $this->karyawan = new KaryawanModel();
    }

    public function index()
    {
        
        $data['karyawan'] = $this->karyawan->getkaryawan()->getResult();

        return view('admin/index', $data);
       // return view('welcome_message');
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $data = array(
            'id'       => $this->request->getPost('id'),
            'nama'        => $this->request->getPost('nama'),
            'umur'       => $this->request->getPost('umur'),
            'divisi'        => $this->request->getPost('divisi'),
        );
        $this->karyawan->savekaryawan($data);
        session()->setFlashdata('message', 'Tambah Data Departemen Berhasil '.$this->request->getPost('id')." ".$this->request->getPost('nama'));
    
        return redirect()->to('/admin/index');

    }   
    
    function edit($id)
    {
        $datakaryawan = $this->karyawan->find($id);
        if (empty($datakaryawan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data karyawan Tidak ditemukan !');
        }
        $data['karyawan'] = $datakaryawan;

        return view('admin/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = array(
            'id'        => $this->request->getPost('id'),
            'nama'       => $this->request->getPost('nama'),
        );
        $this->karyawan->updatekaryawan($data, $id);
        session()->setFlashdata('message', 'Update Data karyawan Berhasil '.$this->request->getPost('id')." ".$this->request->getPost('nama'));
    
        return redirect()->to('/admin/index');
    }

    function delete($id)
    {
        // $kode_departemen = $this->request->getPost('kode_departemen');
        $datakaryawan = $this->karyawan->find($id);
        if (empty($datakaryawan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data karyawan Tidak ditemukan !');
        }
        $this->karyawan->deletekaryawan($id);
        session()->setFlashdata('message', 'Delete Data karyawan Berhasil');
        return redirect()->to('/admin/index');
    }
    
}