<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = ['nome','telefone','email','cpf','curso','foto'];
}
