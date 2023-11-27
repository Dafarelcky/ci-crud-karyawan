<?php

namespace App\Controllers;

use App\Models\MoviesModel;

class Dashboard extends BaseController
{
    protected $movies;

    function __construct()
    {
        $this->movies = new MoviesModel();
    }

    public function index()
    {
        
         $data['movies'] = $this->movies->getMovies()->getResult();
     //   $data['cari'] = $this->request->getGet('cari');
     //   $data['movies']=$this->movies->getMovies($data['cari'])->getResult();

        return view('dashboard/index', $data);
    }

    public function detail($detail)
    {
        
     //    $data['movies'] = $this->movies->getMovies()->getResult();
        $data['detail'] = $detail;
        $data['movies']=$this->movies->getMovies1($data['detail'])->getResult();

        return view('dashboard/detail', $data);
    }

    public function bayar($bayar)
    {
        
     //    $data['movies'] = $this->movies->getMovies()->getResult();
        $data['harga']=$bayar;

        return view('dashboard/bayar', $data);
    }

    public function disc()
    {
        return view('dashboard/disc');
    }

    public function payment($harga)
    {
        $data['harga']=$harga;
        return view('dashboard/payment', $data);
    }
}