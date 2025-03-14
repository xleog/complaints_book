<?php namespace App\Models;

use CodeIgniter\Model;

class MantEmpreModel extends Model
{
    protected $table      = 'empresa';
    protected $primaryKey = 'idempresa';
    protected $allowedFields = ['idempresa','descripcion','direccion','ruc','estado'];

    public function traer_emp() {
        return $this ->select('idempresa, descripcion,direccion,ruc,estado')
                    ->findAll();
    }
}
