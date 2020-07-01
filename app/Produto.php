<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['administrador_id', "funcionario_id", "nm_produto", "tipo_produto", "dt_cadastro", "qt_itens"];

    public function administradores(){
        return $this->belongsTo("App/Administrador");
    }
    public function funcionarios(){
        return $this->belongsTo("App/Funcionario");
    }
}
