@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')


<h2 align="center">Listado de Vendedores</h2><br>

    <div class="row">
        <div class="col-md-12">

                <table class="table table-bordered table-striped">

                    <thead>
			              <tr>
			                <th>@lang('messages.name')</th>
			                <th>@lang('messages.title')</th>
			                <th>@lang('messages.sales')</th>
		                    <th>@lang('messages.clients')</th>
			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($vendedores as $vendedor)
			                  <tr>
			                    <td >{{ $vendedor->name }}</td>
			                    <td>{{ $vendedor->titulo }}</td>
			                    <td>{{ $vendedor->ventas }} €</td>
			                    <td align="center">
			                    <span class="glyphicon glyphicon-plus"> </span>
			                      {!! Html::link(url('vendedores/clients', $vendedor->id), 'Sus Clientes', array('class' => 'btn btn-success btn-xs', 'title' =>'Clientes pertenecientes al vendedor')) !!}
			                    </td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
<?php echo $vendedores->render();?>
</div>

    </div>

@endsection
