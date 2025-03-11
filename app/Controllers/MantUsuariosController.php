<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class MantUsuariosController extends Controller
{
    public function index()
    {
        return view("Views/Hijos/mant_usuarios");
    }
}