<?php 
namespace App\Controllers;

use App\Models\MantUsuModel;
use CodeIgniter\Controller;
class UsuMantController extends Controller
{
    
    public function traer_usuarios()
    {
        $MantUsuModel=new MantUsuModel();
        $data= $MantUsuModel->traer_usu();
        return $this->response->setJSON(['data'=>$data]);
    }
}