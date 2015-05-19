@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fornecedor / Cadastro</div>

				<div class="panel-body">
                                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/fornecedor') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Endereço</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address" value="{{ old('address') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Bairro</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="neighborhood" value="{{ old('nighborhood') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Cidade</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="city" value="{{ old('city') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Estado</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="state" value="{{ old('state') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">CEP</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="postacode" value="{{ old('postalcode') }}">
							</div>
						</div>

						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
