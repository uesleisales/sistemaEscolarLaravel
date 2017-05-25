<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $table = 'categoria';
   protected $primarykey = 'idcategoria';

   public $timestamps = false; // Não cria os campos padroes de registros
   protected $fillable = [
    'nome',
    'descricao',
    'condicao'
   ]; //carrega os campos contidos na tablea

   protected $guarded[]; // Trabalha com as variaveis salvas
}
