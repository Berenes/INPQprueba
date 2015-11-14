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
    {!! Html::link(url('clients/detail/'.$client->id), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-primary')) !!}
  </li>

</ul>
<h2 align="center"><small>@lang('messages.data_client_contact') de</small> {{ $client->name }}</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
  <li class="navbar-left">

      <a href="{{ url('data_clients/contacts', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($client->id < 20)
  <li class="navbar-right">
      <a href="{{ url('data_clients/contacts', "$siguiente_perfil") }}" title="Siguiente Pérfil">
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
                    <td class="title_table">@lang('messages.priority_contact')</td>
                    <td>{{ $data_client_contact->priority_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.name_contact')</td>
                    <td>{{ $data_client_contact->name_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.hob_contact')</td>
                    <td>{{ $data_client_contact->hob_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.fixed_telephone')</td>
                    <td>{{ $data_client_contact->fixed_telephone_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.movil_telephone')</td>
                    <td>{{ $data_client_contact->movil_telephone_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.email')</td>
                    <td>{{ $data_client_contact->email_contact }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.bith_contact')</td>
                    <td>{{ $data_client_contact->bith_contact }}</td>
                  </tr>



                </table>
        </div>
</div>

@endsection















