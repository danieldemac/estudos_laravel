<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=> [
                'nome'=>'Fornecedor 1', 
                'status' => 'N',
                'cnpj' => '0000000000000',
                'ddd' => '81',
                'telefone' => '3080-1793'
            ],
            1=> [
                'nome'=>'Fornecedor 2', 
                'status' => 'S',
                'cnpj' => '0000000000000',
                'ddd' => '87',
                'telefone' => '3080-1792'
            ],
            2=> [
                'nome'=>'Fornecedor 3', 
                'status' => 'S',
                'cnpj' => '0000000000000',
                'ddd' => '11',
                'telefone' => '3180-1292'
                ]
        ];
        return view('app\fornecedor\index', compact('fornecedores'));
    }
}
