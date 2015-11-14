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
  	{!! Html::link(url('clients/all'), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes')) !!}
  </li>

</ul>
<h2 align="center"><small>Detalle del Cliente</small> {{ $client->name }} <small> id: {{ $client->id }}</small></h2>

<ul class="nav nav-pills">
<?php
$siguiente_perfil = $client->id+1;
$anterior_perfil  = $client->id-1;
?>
@if($client->id > 1)
	<li class="navbar-left">

			<a href="{{ url('clients/detail', "$anterior_perfil") }}" title="Anterior Pérfil">
				<span class="glyphicon glyphicon-arrow-left"> </span>
			</a>
	</li>
	@endif
	@if($client->id < 20)
	<li class="navbar-right">
			<a href="{{ url('clients/detail', "$siguiente_perfil") }}" title="Siguiente Pérfil">
				<span class="glyphicon glyphicon-arrow-right"> </span>
			</a>
	</li>
	@endif

</ul>
<br>

    <div class="row">
        <div class="col-md-12">


                <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                      <th>
                     @if($client->data_client)
                      {!! Html::link(url('data_clients/contacts', $client->data_client->client_id), \Lang::get('messages.data_client_contact'),array('title' => 'Contactos del cliente','class' => 'btn btn-primary btn-sm')) !!}
                      {!! Html::link(url('data_clients/homes', $client->data_client->client_id), \Lang::get('messages.data_client_home'),array('title' => 'Dirección del cliente','class' => 'btn btn-success btn-sm')) !!}
                      </th>
                      <th>
                      {!! Html::link(url('data_clients/sales', $client->data_client->client_id), \Lang::get('messages.data_client_sale'),array('title' => 'Ventas del cliente','class' => 'btn btn-warning btn-sm')) !!}
                      {!! Html::link(url('data_clients/carteras', $client->data_client->client_id), \Lang::get('messages.data_client_cartera'),array('class' => 'btn btn-danger btn-sm')) !!}

                      {!! Html::link(url('data_clients/pedidos', $client->data_client->client_id), \Lang::get('messages.data_client_pedidos'),array('title' => 'Pedidos del cliente','class' => 'btn btn-info btn-sm')) !!}

                        </th>
                    </tr>
            </thead>

                  <tr>
                    <td class="title_table">@lang('messages.name')</td>
                    <td>{{ $client->name }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.business_name')</td>
                    <td>{{ $client->business_name }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.nif')</td>
                    <td>{{ $client->data_client->nif }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.status')</td>
                    <td>{{ $client->data_client->status }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.zone')</td>
                    <td>{{ $client->data_client->zone }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.fixed_telephone')</td>
                    <td>{{ $client->data_client->fixed_telephone }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.movil_telephone')</td>
                    <td>{{ $client->data_client->movil_telephone }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.other_telephone')</td>
                    <td>{{ $client->data_client->other_telephone }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.fax')</td>
                    <td>{{ $client->data_client->fax }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.tipe_client')</td>
                    <td>{{ $client->data_client->tipe_client }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.website')</td>
                    <td>{{ $client->data_client->website }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.email')</td>
                    <td>{{ $client->data_client->email }}</td>
                  </tr>

                  <tr>
                    <td class="title_table">@lang('messages.saldo')</td>
                    <td>{{ $client->data_client->saldo }}</td>
                  </tr>
                @endif
                </table>
</div>

    </div>

@endsection
