@extends('layouts.base')

@section('content')
  <div class="container-perfil">
    <main class="display">
    @foreach( $usuarios as $usuario )
    <div class="jumbotron">
      <h1 class="display-4"> Bem-vinda(o) { {{$usuario->name}} }</h1>
      <hr class="my-4">
      <h3 class="my-3">Dados Cadastrais</h3>
      <p class="cadastro__cnpj"><strong>Email</strong>: {{$usuario->email}}</p>
      <p class="cadastro__endereço"><strong>Endereço</strong>: {{$usuario->rua}}, {{$usuario->numero}}</p>
      <p class="cadastro__endereço"><strong>Cidade:</strong> {{$usuario->cidade}}</p>
      <p class="cadastro__endereço"> <strong>Estado:</strong> {{$usuario->estado}}</p>
      <p class="cadastro__cnpj"><strong>CPF</strong>: {{$usuario->documento}}</p>
      <hr class="my-4">
      @endforeach

      
      <h3 class="my-3">Histórico de compras</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Pedido</th>
            <th scope="col">Valor</th>
            <th scope="col">Data</th>
          </tr>
        </thead>
        @foreach($pedidos as $pedido)
        <tbody>
          <tr>
            <th scope="row">{{$pedido->id_pedido}}</th>
            <td>
            <?php

            $newString = preg_replace('/[^a-zç]/i', ' ', $pedido->items);
              echo $newString
              ?>
            </td>
            <td>
              R${{ $pedido->total }},00
            </td>
            <td>{{$pedido->created_at}}</td>
          </tr>
        </tbody>
      @endforeach
      </table>
    </div>
  </div>  
@endsection