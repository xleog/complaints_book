<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class IncideConsulController extends Controller 
{
    public function index()
    {
        return view('Views/Hijos/incide_consul.php');
    }
}