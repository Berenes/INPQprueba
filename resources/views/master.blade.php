<html>
    <head>
        <title>INPQprueba</title>
        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
        {!! Html::style('http://fonts.googleapis.com/css?family=Ubuntu') !!}
        {!! Html::script('https://code.jquery.com/jquery-1.11.1.js') !!}
        {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
            {!! Html::style('css/styles.css') !!}

    </head>
    <body>

        @include('includes.nav')

        <div class="container">

            @if (Auth::check())
                <div class="col-md-3">
                    @yield('sidebar')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            @else
                <div class="col-md-12">
                    @yield('content')
                </div>
            @endif

        </div>

    </body>
</html>
