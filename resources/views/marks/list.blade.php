@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')

<h2 align="center"><small>Listado de </small>Marcas <small>de productos</small></h2><br>

    <div class="row">
        <div class="col-md-12">

            @if (Session::has('user_deleted'))
                <div class="alert alert-success">{!! Session::get('user_deleted') !!}</div>
            @endif

                <table class="table table-bordered table-striped">

                    <thead>
			              <tr>
			                <th>@lang('messages.markNC')</th>
			                <th>@lang('messages.mark')</th>
			                <th></th>
			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($marks as $mark)
			                  <tr>
			                    <td>{{ $mark->alias }}</td>
			                    <td>{{ $mark->name }}</td>
			                    <td align="center"><span class="glyphicon glyphicon-circle-arrow-down"> </span>
			                    	{!! Html::link(url('products/detail', $mark->id), \Lang::get('messages.products'), array(
			                    	'class' => 'btn btn-danger btn-xs',
			                    	'title' => 'Productos asociados a esta Marca')) !!}
			                    </td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
<?php echo $marks->render();?>
</div>

    </div>

@endsection
