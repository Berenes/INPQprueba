<nav class="navbar navbar-default sidebar" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

			<ul class="nav navbar-nav">

				<li class="active">
					<a href="{{ url('dashboard/') }}"> Creado con Laravel
						<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-sound-5-1"></span>
					</a>
				</li>
				<li><a href="{{ url('users/profile') }}">@lang('messages.profile') <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('messages.vendedores') <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
			        <ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{ url('vendedores/all') }}">@lang('messages.list_vendedores')</a></li>
			        </ul>
			    </li>

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('messages.clients') <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
			        <ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{ url('clients/all') }}">@lang('messages.list_clients')</a></li>
			        </ul>
			    </li>

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('messages.familys') <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a>
			        <ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{ url('familys/all') }}">@lang('messages.list_familys')</a></li>
			        </ul>
			    </li>

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@choice('messages.marks', 10) <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tag"></span></a>
			        <ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{ url('marks/all') }}">@lang('messages.list_marks')</a></li>
			        </ul>
			    </li>

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@choice('messages.advanced_queries', 10) <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search advanced_queries"></span></a>
			        <ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{ url('advanced_queries') }}">@lang('messages.advanced_queries')</a></li>
			        </ul>
			    </li>

			</ul>
		</div>
	</div>
</nav>
