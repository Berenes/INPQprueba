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
    {!! Html::link(url('clients/detail/'.$client->id), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-warning')) !!}
  </li>

</ul>
<h2 align="center"><small>@lang('messages.data_client_sale') de </small>{{ $client->name }}</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
  <li class="navbar-left">

      <a href="{{ url('data_clients/sales', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($client->id < 20)
  <li class="navbar-right">
      <a href="{{ url('data_clients/sales', "$siguiente_perfil") }}" title="Siguiente Pérfil">
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
                    <td class="title_table">@lang('messages.last_sale')</td>
                    <td>{{ $data_client_sale->last_sale }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.code_article')</td>
                    <td>{{ $data_client_sale->code_article }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.alias_article')</td>
                    <td>{{ $data_client_sale->alias_article }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.description_article')</td>
                    <td>{{ $data_client_sale->description_article }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.quantity_sale')</td>
                    <td>{{ $data_client_sale->quantity_sale }} </td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.price_last_sale')</td>
                    <td>{{ $data_client_sale->price_last_sale }} €</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.deduction')</td>
                    <td>{{ $data_client_sale->deduction }} %</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.taxable')</td>
                    <td>{{ $data_client_sale->taxable }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.tipe_iva')</td>
                    <td>{{ $data_client_sale->tipe_iva }} %</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.cuota_iva')</td>
                    <td>{{ $data_client_sale->cuota_iva }}</td>
                  </tr>



                </table>
        </div>
</div>

@endsection















