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

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido' }}
    <!--
        se a $variávvel testada não estiver definida
        ou
        se a $variável testada possuir o valor null
    -->
@endisset

@php
    /*
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif  
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- executa se o retorno da condição for false -->
Fornecedor inativo
@endunless
    */
@endphp

@php
    /*
    if(isset($variavel)) {} //retornar true se a variável estiver definida!
    */
@endphp

@php
    /*
    if(empty($variavel)) {} //retornar true se a variável estiver vazia! Exemplo:
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var  // correto=> $var = 'abc'
    */
@endphp