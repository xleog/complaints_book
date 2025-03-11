<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'idusuarios';
    protected $allowedFields = ['idusuarios','usuario', 'password_usu'];
    public function usuarios_activos()
    {
        return $this->select('idusuarios,usuario,password_usu')
                    ->where('estado', 'ACTIVO')
                    ->findAll();
    }

    public function getAccessData($codusuario, $sucursal)
    {

        return $this->db->table('acceso ace')
            ->select('ace.idusuarios codusu,usu.usuario AS nombre,sucu.descripcion,alm.descripcion descripcion_alm,
                emp.descripcion nempresa,emp.venc_crt,CONCAT(emp.descripcion,"-",emp.ruc)datempresa,emp.ruc,emp.direccion dir_empresa,
                emp.usuario_sol,emp.clavesol,usu.perfil AS perfil,emp.ubigeo,emp.modo_ft_notas,emp.modo_guias,emp.clientid,emp.passid')
            ->join('usuarios usu', 'ace.idusuarios = usu.idusuarios')
            ->join('sucursal sucu', 'ace.idsucursal = sucu.idsucursal')
            ->join('empresa emp', 'emp.idempresa = sucu.idempresa')
            ->join('almacen alm', 'sucu.idsucursal = alm.idsucursal')
            ->where('acceso', 'SI')
            ->where('ace.idusuarios', $codusuario)
            ->where('ace.idsucursal', $sucursal)
            ->get()
            ->getRow();
    }

    public function getUser($usuario, $clave)
    {
        // Obtener el usuario desde la base de datos
        $user = $this->where('idusuarios', $usuario)
                     ->where('estado', 'ACTIVO')
                     ->first();        
    
        // Verificar si el usuario fue encontrado
        if ($user) {
           
            $passwordCheck = password_verify($clave, $user['password_usu']);            
                
            if ($passwordCheck) {
                return $user; // La contraseña es correcta
            }
        }        
        
        return null; // Usuario desactivado o contraseña incorrecta
    }
}