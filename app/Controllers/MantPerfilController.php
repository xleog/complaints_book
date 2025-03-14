<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class MantPerfilController extends Controller
{
    public function index()
    {
        return view('Views/Hijos/mant_perfil.php');
    }
}