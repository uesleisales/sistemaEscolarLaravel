<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'nome', 'email', 'idade', 'sexo', 'endereco'  //carrega os campos contidos na tabela
    ];
}
