@extends( "app" )

@section( "content" )
<div class = "container" >
    <div class = "row" >
		 <fieldset>
	      {!! Form::open(array('route' => 'geocode', 'class' => 'form')) !!}

	       
	       
	        {!! Form::hidden('long', null, 
	            array('', 
					'class'=>'form-control', 
					'placeholder'=>'Long')
				) 
          	!!}

      	 	{!! Form::hidden('lat', null, 
	            array('', 
					'class'=>'form-control', 
					'placeholder'=>'Lat')
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

	    <?php echo $errors->first('cidade'); ?><br>
	    <?php echo $errors->first('estado'); ?>



	</div>
</div>

@endsection 