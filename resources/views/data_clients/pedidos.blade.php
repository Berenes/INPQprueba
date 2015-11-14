@extends("master")

@section('title_table')

  @lang('messages.login')

@endsection

@section('sidebar')

  @include('includes/sidebar')

@endsection

@section('content')



<ul class="nav nav-pills">

  <li class="navbar-right">
    {!! Html::link(url('clients/detail/'.$client->id), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-info')) !!}
  </li>

</ul>
<h2 align="center"><small>Pedidos de</small> {{ $client->name }}</h2><br>
<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
  <li class="navbar-left">

      <a href="{{ url('data_clients/pedidos', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($client->id < 20)
  <li class="navbar-right">
      <a href="{{ url('data_clients/pedidos', "$siguiente_perfil") }}" title="Siguiente Pérfil">
        <span class="glyphicon glyphicon-arrow-right"> </span>
      </a>
  </li>
  @endif
</ul>
<br>

<div class="row">
        <div class="col-md-12">


                <table class="table table-bordered table-striped">
                  <tr>
                    <td class="title_table">Fecha último pedido</td>
                    <td class="title_table">Importe</td>

                  </tr>
                @foreach ($pedido as $pedid)

                  <tr>
                    <td>{{ $pedid->date_pedido }}</td>
                    <td>{{ $pedid->importe }} €</td>
                  </tr>
                @endforeach


                </table>
        </div>
</div>

@endsection