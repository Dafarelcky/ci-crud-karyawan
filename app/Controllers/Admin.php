<?php

namespace App\Controllers;

use App\Models\MoviesModel;
use App\Models\RiwayatModel;

class Admin extends BaseController
{
    protected $movies;
    protected $riwayat;

    function __construct()
    {
        $this->movies = new MoviesModel();
        $this->riwayat = new RiwayatModel();
    }

    public function index()
    {
        
         $data['movies'] = $this->movies->getMovies()->getResult();
     //   $data['cari'] = $this->request->getGet('cari');
     //   $data['movies']=$this->movies->getMovies($data['cari'])->getResult();

        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $data = array(
            
            'title'       => $this->request->getPost('title'),
            'description'        => $this->request->getPost('description'),
            'release_date'       => $this->request->getPost('release_date'),
            'duration_minutes'        => $this->request->getPost('duration_minutes'),
            'harga'       => $this->request->getPost('harga'),
        );
        $this->movies->saveMovies($data);
        session()->setFlashdata('message', 'Tambah Data Departemen Berhasil '.$this->request->getPost('id')." ".$this->request->getPost('title'));
    
        return redirect()->to('/admin/index');

    }   

    public function store_riwayat()
    {
        $data = array(
            
            'harga'       => $this->request->getPost('harga'),
        );
        $this->riwayat->saveMovies($data);
        session()->setFlashdata('message', 'Tambah Data Departemen Berhasil '.$this->request->getPost('id')." ".$this->request->getPost('title'));
    
        return redirect()->to('/admin/index');

    }   
    
    function edit($id)
    {
        $dataMovies = $this->movies->find($id);
        if (empty($dataMovies)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Movies Tidak ditemukan !');
        }
        $data['movies'] = $dataMovies;

        return view('admin/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = array(
            'id'        => $this->request->getPost('id'),
            'title'       => $this->request->getPost('title'),
        );
        $this->movies->updateMovies($data, $id);
        session()->setFlashdata('message', 'Update Data Movies Berhasil '.$this->request->getPost('id')." ".$this->request->getPost('title'));
    
        return redirect()->to('/admin/index');
    }

    function delete($id)
    {
        // $kode_departemen = $this->request->getPost('kode_departemen');
        $dataMovies = $this->movies->find($id);
        if (empty($dataMovies)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Movies Tidak ditemukan !');
        }
        $this->movies->deleteMovies($id);
        session()->setFlashdata('message', 'Delete Data Movies Berhasil');
        return redirect()->to('/admin/index');
    }
    
}