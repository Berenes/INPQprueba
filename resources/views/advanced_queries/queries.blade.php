@extends("master")

@section('title')

	@lang('messages.login')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
	    <form class="form-inline">
	    <label><EM>En Fase de construcción</EM></label>
			<select  style="width: 220px; height:300px " class="form-control input-lg" id="selector" multiple>
				<optgroup label="Group By" id="avanced_search">
						<option value=""></option>
						<option value="d">Fecha de factura</option>
						<option value="c">Cliente (id)</option>
						<option value="a">Artículo (id)</option>
						<option value="f">Familia (id)</option>
						<option value="s">Subfamilia (id)</option>
						<option value="m">Marca (id)</option>
						<option value="i">Factura</option>
						<option value="r">Albaran</option>
						<option value="p">Pedido (id)</option>
						<option value="v">Vendedor (id)</option>
				</optgroup>

				<optgroup label="fechaIni">
					<option value="dini">fechaIni</option>
				</optgroup>

				<optgroup label="fechaFin">
					<option value="dfin">fechaFin</option>
				</optgroup>

			</select>
			<button class="btn btn-primary btn-search">
					Buscar por: <span class="glyphicon glyphicon-search"> </span>
			</button>
		</form>
	</div>
</div>
<div id="mostrar-texto"></div>

<script>
var url ="";
$('select')
  .change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).attr("value");
    });
    url = "advanced_queries/";
    url+= str;
  })
  .trigger( "change" );

  $(".btn-search").click(function(){
    	window.open(url);
  	});

</script>
@endsection
