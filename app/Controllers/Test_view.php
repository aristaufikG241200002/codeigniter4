<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Test_view extends Controller
{
    public function index()
    {
        $data['title']  = 'Niagahoster Tutorial';
        $data['msg1']    = 'Selamat datang di Universitas';
        $data['msg2']    = 'Data Mahasiswa Tahun 2021';
        echo view('test_view', $data);
    }
}