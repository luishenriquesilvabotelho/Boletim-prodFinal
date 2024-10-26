<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'aluno',
            'nome_disciplina',
            'nota_disciplina',       
            'falta_disciplina',
    ];
}
