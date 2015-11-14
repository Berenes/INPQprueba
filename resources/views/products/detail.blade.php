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
    {!! Html::link(url('marks/all'), \Lang::get('messages.return'),array('title' => 'Volver al listado de Marcas','class' => 'btn btn-primary')) !!}
  </li>

</ul>


<h2 align="center">
	<small>Listado de</small>
	 @lang('messages.products')
	 <small>asociados a la marca</small> {{ $mark->name }}

</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_subproduct = $mark->id+1;
$anterior_subproduct  = $mark->id-1;
?>
@if($mark->id > 1)
  <li class="navbar-left">

      <a href="{{ url('products/detail', "$anterior_subproduct") }}" title="Anterior">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($mark->id < 20)
  <li class="navbar-right">
      <a href="{{ url('products/detail', "$siguiente_subproduct") }}" title="Siguiente">
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
			                <th>@lang('messages.description')</th>
			                <th>@lang('messages.price')</th>

			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($products as $product)
			                  <tr>
			                    <td>{{ $product->name }}</td>
			                    <td>{{ $product->description }}</td>
			                    <td>{{ $product->price }} €</td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
</div>

    </div>

@endsection
