<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['administrador_id', "nm_funcionario", "dt_admissao"];

    public function administrador(){
        return $this->belongsTo("App/Administrador");
    }
    public function produtos(){
        return $this->hasmany("App/Produto");
    }
}
