<?php
namespace App\Models;
use CodeIgniter\Model;

class MantUsuModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'idusuarios';
    protected $allowedFields = ['idusuarios','usuario','clave','estado','perfil'];
    public function traer_usu(){
        return $this ->select('idusuarios,usuario,clave,estado,perfil')
                    ->findAll();
    }
}

