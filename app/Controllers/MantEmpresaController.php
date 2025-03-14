<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class MantEmpresaController extends Controller
{
    public function index()
    {
        return view("Views/Hijos/mant_empresa.php");
    }
}