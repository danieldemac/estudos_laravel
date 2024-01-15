<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor teste';
        $fornecedor->site = 'Fornecedor teste';
        $fornecedor->uf = 'PE';
        $fornecedor->email = 'Fornecedor teste';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => "MS",
            'email' => 'contato@fornecedor200.com.br'
        ]);

    }
}
