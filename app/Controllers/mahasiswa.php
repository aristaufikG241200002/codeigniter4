<?php

namespace App\Controller;

use CodeIgniter\Controller;
use App\Models\mahasiswa_model;

class mahasiswa extends Controller
{
    protected $mmahasiswa;

    pbulic function_construct(){

        $this->$mmahasiswa = new mahasiswa_model();

    }
    public function index()
    {

    }
}