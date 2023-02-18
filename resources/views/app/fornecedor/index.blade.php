<h3> Fornecedor </h3>

{{-- Estou realizando comentarios no index.blade.php --}}

{{-- Implementando sintaxe PHP para informar que é PHP Puro --}}
@php
//  if() {
    
//  } else if () {
     
//  } else {

//  }
@endphp

{{-- Instrução para printar o array retornado --}}
{{-- @dd($fornecedores) --}}
{{-- Utilizando condição de IF/ElseIf e Else--}}
@if(count($fornecedores) > 0 && count($fornecedores) <= 5)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 5)
    <h3> Existem vários fornecedores cadastrados </h3>
@else
    <h3> Ainda não existem fornecedores cadastrados</h3>
@endif