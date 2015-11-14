@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')

<h2 align="center"><small>Listado de</small> Familas <small>de productos</small></h2><br>

    <div class="row">
        <div class="col-md-12">

            @if (Session::has('user_deleted'))
                <div class="alert alert-success">{!! Session::get('user_deleted') !!}</div>
            @endif

                <table class="table table-bordered table-striped">

                    <thead>
			              <tr>
			                <th>@lang('messages.familyNC')</th>
			                <th>@lang('messages.family')</th>
			                <th></th>
			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($familys as $family)
			                  <tr>
			                    <td>{{ $family->alias }}</td>
			                    <td>{{ $family->description }}</td>
			                    <td align="center"><span class="glyphicon glyphicon-circle-arrow-down"> </span>
			                    	{!! Html::link(url('familys/detail', $family->id), \Lang::get('messages.sub_family'), array(
			                    	'class' => 'btn btn-danger btn-xs',
			                    	'title' => 'Sub-familias asociadas')) !!}
			                    </td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
<?php echo $familys->render();?>
</div>

    </div>

@endsection
