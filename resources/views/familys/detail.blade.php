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
    {!! Html::link(url('familys/all'), \Lang::get('messages.return'),array('title' => 'Volver al listado de clientes','class' => 'btn btn-primary')) !!}
  </li>

</ul>

<h2 align="center"><small>Sub Familas de la Familia</small> {{ $family->alias }}</h2><br>

<ul class="nav nav-pills">
<?php
$siguiente_subfamilia = $family->id+1;
$anterior_subfamilia  = $family->id-1;
?>
@if($family->id > 1)
  <li class="navbar-left">

      <a href="{{ url('familys/detail', "$anterior_subfamilia") }}" title="Anterior">
        <span class="glyphicon glyphicon-arrow-left"> </span>
      </a>
  </li>
  @endif
  @if($family->id < 20)
  <li class="navbar-right">
      <a href="{{ url('familys/detail', "$siguiente_subfamilia") }}" title="Siguiente">
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
			                <th>@lang('messages.sub_familyNC')</th>
			                <th>@lang('messages.sub_family')</th>

			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($sub_family as $sfamily)
			                  <tr>
			                    <td >{{ $sfamily->alias }}</td>
			                    <td>{{ $sfamily->description }}</td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
</div>

    </div>

@endsection
