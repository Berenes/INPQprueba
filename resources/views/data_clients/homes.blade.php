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
    {!! Html::link(url('clients/detail/'.$client->id), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-success')) !!}
  </li>

</ul>
<h2 align="center"><small>@lang('messages.data_client_home') de</small> {{ $client->name }}</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
  <li class="navbar-left">

      <a href="{{ url('data_clients/homes', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($client->id < 20)
  <li class="navbar-right">
      <a href="{{ url('data_clients/homes', "$siguiente_perfil") }}" title="Siguiente Pérfil">
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
                    <td class="title_table">@lang('messages.priority_home')</td>
                    <td>{{ $data_client_home->priority_home }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.address_name')</td>
                    <td>{{ $data_client_home->address_name }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.responsible_address')</td>
                    <td>{{ $data_client_home->responsible_address }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.address')</td>
                    <td>{{ $data_client_home->address }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.postal_code')</td>
                    <td>{{ $data_client_home->postal_code }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.population')</td>
                    <td>{{ $data_client_home->population }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.province')</td>
                    <td>{{ $data_client_home->province }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.state')</td>
                    <td>{{ $data_client_home->state }}</td>
                  </tr>

                </table>
        </div>
</div>

@endsection















