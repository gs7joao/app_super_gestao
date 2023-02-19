<h3> Fornecedor </h3>

{{-- Estou realizando comentarios no index.blade.php --}}

{{-- Implementando sintaxe PHP para informar que é PHP Puro --}}
@php
    // if(!<$variavel>) {} // Executa se o retorno for true
    // if(isset(<$variavel>)) {} // Retorna true se a variável estiver definida
    // if(empty(<$variavel>)) {} // Retorna true se a variável estiver vazia
@endphp


{{-- @empty executa se a variável estiver vazia --}}
{{-- @isset executa se a variável estiver definida --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        Status: {{ $fornecedores[0]['cnpj'] }}

        {{-- @empty executa se a variável estiver vazia --}}
        @empty($fornecedores[0]['cnpj'])
            CNPJ VAZIO
        @endempty
    @endisset
    <br>
@endisset


{{-- @unless executa se o retorno for false --}}
{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- Executa se a condição for false -->
Fornecedor Inativo
@endunless
<br>
<br>
Fornecedor: {{ $fornecedores[1]['nome'] }}
<br>
Status: {{ $fornecedores[1]['status'] }}
<br>
@unless($fornecedores[1]['status'] == 'N') <!-- Executa se a condição for false -->
Fornecedor Ativo
@endunless --}}


{{-- Instrução para printar o array retornado --}}
{{-- @dd($fornecedores) --}}


{{-- Utilizando condição de IF/ElseIf e Else--}}
{{-- @if(count($fornecedores) > 0 && count($fornecedores) <= 5)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 5)
    <h3> Existem vários fornecedores cadastrados </h3>
@else
    <h3> Ainda não existem fornecedores cadastrados</h3>
@endif --}}