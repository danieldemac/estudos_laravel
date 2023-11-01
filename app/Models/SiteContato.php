<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $table = 'site_contatos';
    protected $fillable = ['nome','telefone','email', 'motivo_contato', 'mensagem'];
}
