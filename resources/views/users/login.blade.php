@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('content')


    <div class="col-md-9 col-md-offset-0">


        <div id="bienvenida">
            <p>
                <button class="btn btn-success btn-razones">Justificación (desplegable) <span class="glyphicon glyphicon-arrow-down"> </span></button>
            </p>

            <div class="razones">

            <p>
                Lógicamente todas las consultas solicitadas en este <span class"title_table">website</span> pertenecen a la parte <span class"title_table">BackEnd</span> de la aplicación. Por lo tanto, al ser una zona restringida, para acceder a ella se ha creado un usuario y una contraseña de administración.
            </p>
            <p>
                Email: <span class"title_table">jailbreakkk@yahoo.es</span>
            </p>
            <p>
                Contraseña: <span class"title_table">berenes</span>
            </p>

            <h4 align="center">Adelante. Echa un vistazo.</h4><br>
            <p>
                <button class="btn btn-danger btn-razones-hide">
                    Ocultar justificación: <span class="glyphicon glyphicon-arrow-up"> </span>
                </button>
            </p>

        </div>
        </div>






        <h1 class="text-muted text-center">@lang('messages.login')</h1>

        {{-- Incluimos el template que muestra errores --}}
		@include('includes/errors')

        <div class="form-group">

            {!! Form::open(['url' => 'users/login', 'class' => 'form']) !!}

                {!! Form::label('email', Lang::get('messages.email')) !!}

                {!! Form::text('email', old('email'), ["class" => "form-control"]) !!}<br>

                {!! Form::label('password', Lang::get('messages.password')) !!}

    	        {!! Form::password('password', ["class" => "form-control"]) !!}

                <br />
    	        {!! Form::submit(Lang::get('messages.login'), ["class" => "btn btn-success btn-block"]) !!}

            {!! Form::close() !!}

        </div>
    </div>
<script>

     $(function() {
        $(".razones").hide();
        $(".btn-razones-hide").hide();

         $(".btn-razones").click(function(){
            $(".btn-razones").hide();
            $(".btn-razones-hide").show();
            $(".razones").show();
        }); // end click
         $(".btn-razones-hide").click(function(){
            $(".btn-razones").show();
            $(".btn-razones-hide").hide();
            $(".razones").hide();
        }); // end click
    }); //

</script>
</script>
@endsection
