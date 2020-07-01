<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['nm_administrador'];

    public function funcionarios(){
        return $this->hasMany("App/Funcionario");
    }
    public function produtos(){
        return $this->hasmany("App/Produto");
    }
}
