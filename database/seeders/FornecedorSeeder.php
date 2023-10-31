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

        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor teste2';
        $fornecedor->site = 'Fornecedor teste2';
        $fornecedor->uf = 'PE';
        $fornecedor->email = 'Fornecedor teste2';
        $fornecedor->save();


    }
}
