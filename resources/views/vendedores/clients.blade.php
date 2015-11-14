@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')

<ul class="nav nav-pills">

  <li class="navbar-right">
    {!! Html::link(url('vendedores/all/'), \Lang::get('messages.return'),array('title' => 'Volver al listado de vendedores','class' => 'btn btn-primary')) !!}
  </li>

</ul>

<h2 align="center"><small>Listado de clientes pertenecientes al vendedor</small> {{ $vendedor->name }}</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_perfil = $vendedor->id+1;
$anterior_perfil  = $vendedor->id-1;
?>
@if($vendedor->id > 1)
  <li class="navbar-left">

      <a href="{{ url('vendedores/clients', "$anterior_perfil") }}" title="Anterior Pérfil">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($vendedor->id < 10)
  <li class="navbar-right">
      <a href="{{ url('vendedores/clients', "$siguiente_perfil") }}" title="Siguiente Pérfil">
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
			                <th>@lang('messages.name')</th>
			                <th>@lang('messages.telephone')</th>
			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($client as $clie)
			                  <tr>
			                    <td >{{ $clie->name }}</td>
			                    <td>{{ $clie->telephone }}</td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
		</div>

    </div>

@endsection
