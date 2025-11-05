<h3>Fornecedor</h3>

{{--comentario--}}

{{--para usar php puro deve-se:--}}

@php
    // Para comentários de uma linha
    /*
    Para comentários de múltiplas linhas
    */

   // echo 'Texto de teste';
@endphp

@php
  /*  if() {

    } elseif() {

    } else {
    
    }
    */
@endphp

@php
/*
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem vários fornecedores cadastrados </h3>
@else
    <h3> Ainda não existem fornecedores cadastrados </h3>
@endif
*/
@endphp

{{--Enquanto @if, executa se o retorno for true
o @unless, executa se o retorno for false
--}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif  
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- executa se o retorno da condição for false -->
Fornecedor inativo
@endunless
