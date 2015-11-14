@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')


<h2 align="center">Listado de Clientes</h2><br>

    <div class="row">
        <div class="col-md-12">

            @if (Session::has('user_deleted'))
                <div class="alert alert-success">{!! Session::get('user_deleted') !!}</div>
            @endif

                <table class="table table-bordered table-striped">

                    <thead>
			              <tr>
			                <th>@lang('messages.name')</th>
			                <th>@lang('messages.business_name')</th>
			                <th>@lang('messages.telephone')</th>
		                    <th>@lang('messages.detail')</th>
			              </tr>
					  </thead>

                      <tbody>
			              @foreach ($clients as $client)
			                  <tr>
			                    <td >{{ $client->name }}</td>
			                    <td>{{ $client->business_name }}</td>
			                    <td>{{ $client->telephone }}</td>
			                    <td align="center">
			                    <span class="glyphicon glyphicon-plus"> </span>
			                      {!! Html::link(url('clients/detail', $client->id), \Lang::get('messages.detail'), array('class' => 'btn btn-success btn-xs')) !!}
			                    </td>
			                  </tr>
			              @endforeach
				  	  </tbody>

                </table>
<?php echo $clients->render();?>
</div>

    </div>

@endsection
