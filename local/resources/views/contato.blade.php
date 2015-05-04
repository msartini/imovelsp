@extends( "app" )

@section( "content" )




<div class = "container" >
    <div class = "row" >

		 <fieldset>
	      {!! Form::open(array('route' => 'contatogeral', 'class' => 'form', 'name' => 'form2')) !!}

	       
	       
	        {!! Form::text('long', null, 
	            array('', 
					'class'=>'form-control', 
					'placeholder'=>'Long')
				) 
          	!!}

      	 	{!! Form::text('lat', null, 
	            array('', 
					'class'=>'form-control', 
					'placeholder'=>'Lat')
				) 
          	!!}
          	<!-- Logradouro -->
	        {!! Form::label('Logradouro') !!}
	        {!! Form::text('logradouro', null, 
	            array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Logradouro')
				) 
          	!!}
	        <!-- Endereco -->
	        {!! Form::label('Endereço') !!}
	        {!! Form::text('endereco', null, 
	            array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Endereco')
				) 
          	!!}
			<!-- Numero -->
			{!! Form::label('Número') !!}
			{!! Form::text('numero', null, 
			    array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Número')
				) 
				!!}
			<!-- Bairro -->
			{!! Form::label('Bairro') !!}
					{!! Form::text('bairro', null, 
				    	array('required', 
						'class'=>'form-control', 
						'placeholder'=>'Bairro')
					) 
			!!}
			<!-- Cidade -->
			{!! Form::label('Cidade') !!}
				{!! Form::text('cidade', null, 
				    array('', 
						'class'=>'form-control', 
						'placeholder'=>'Cidade')
				) 
			!!}
			<!-- Estado -->
			{!! Form::label('Estado') !!}
				{!! Form::text('estado', null, 
				    array('', 
						'class'=>'form-control', 
						'placeholder'=>'Estado')
				) 
			!!}
			<div>LONGITUDE: {{ $longitude }}</div>

			<div class="form-group">
			    {!! Form::submit('Pesquisa Endereço', 
			      array('class'=>'btn btn-primary')) !!}
			</div>

		 	 

	      {!! Form::close() !!}
	    </fieldset>

 
		<?php $url = action('MediaController@geocode'); ?>
		<div class="form-group">
		    {!! Form::button('Pesquisa Endereço', 
		      array( 'class'=>'btn btn-primary', 'id' => 'btnLocation', 
		      'onclick' => 'getLocation(this)', 'data-url' => $url ) ) !!}
		</div>

	    <?php echo $errors->first('cidade'); ?><br>
	    <?php echo $errors->first('estado'); ?>



	</div>
</div>

<script>
/**
* Desvia a acao do usuario para recuperar a geoLocation do endereco
*/ 
 
function getLocation(obj) {
    document.form2.action = obj.getAttribute('data-url');
    document.form2.submit();
};
</script>

@endsection 