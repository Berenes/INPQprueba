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
    {!! Html::link(url('clients/detail/'.$client->id), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-danger')) !!}
  </li>

</ul>
<h2 align="center"><small>Pendientes de pago de</small> {{ $client->name }}</h2><br>
<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
  <li class="navbar-left">

      <a href="{{ url('data_clients/carteras', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($client->id < 20)
  <li class="navbar-right">
      <a href="{{ url('data_clients/carteras', "$siguiente_perfil") }}" title="Siguiente Pérfil">
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
                    <td class="title_table">@lang('messages.invoice')</td>
                    <td>{{ $data_client_cartera->invoice }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.date_invoice')</td>
                    <td>{{ $data_client_cartera->date_invoice }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.amount')</td>
                    <td>{{ $data_client_cartera->amount }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.expiration')</td>
                    <td>{{ $data_client_cartera->expiration }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.sw_returned')</td>
                    <td>{{ $data_client_cartera->sw_returned }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.tipe_document')</td>
                    <td>{{ $data_client_cartera->tipe_document }}</td>
                  </tr>
                </table>
        </div>
</div>

@endsection















