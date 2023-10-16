<h3>Fornecedor</h3>


@php

 

@endphp



 @isset($fornecedores)

        @forelse($fornecedores as $indice => $fornecedor)
            Iteração Atual: {{$loop -> iteration}}
            <br>
            Fornecedor: {{$fornecedor['nome']}}
            <br>
            Status: {{$fornecedor['status']}}
                @if($fornecedor['status'] == 'N')
                    - INATIVO
                @endif
                @if($fornecedor['status'] == 'S')
                - ATIVO
                @endif
            <br>
            CNPJ: {{$fornecedor['cnpj'] ?? ''}}
            <br>
            Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
            @switch($fornecedor['ddd'])
            @case ('11') 
                - São Paulo - SP
                @break
            @case ('81')
                - Recife - PE
                @break
            @case ('87')
                - João Pessoa - PB
                @break
            @default
                - Brasil
        @endswitch
            <hr>
        @if($loop->last)
            Total de Registros: {{$loop->count}}
            <hr>
        @endif
        @empty
            Não existe Fornecedores!
        

    @endforelse


     
 @endisset








