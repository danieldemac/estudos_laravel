<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new SiteContato();
        $contato->nome = 'Jão 01';
        $contato->telefone = '998311992';
        $contato->email = 'jao@contato.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Teste';
        $contato->save();

    }
}
