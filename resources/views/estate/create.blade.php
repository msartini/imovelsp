@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div>
                    <h1>CADASTRO DE IMÓVEIS</h1>
                </div>
                <div class="panel-heading">Imoveis / Cadastro</div>

                <div class="panel-body">
                    {!! Form::open(
                        array(
                            'id' => 'myForm',
                            'route' => 'admin.estate.store',
                            'class' => 'form',
                            'novalidate' => 'novalidate',
                            'files' => true)) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {!! Form::hidden('id', '0', array('id' => 'id')) !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                {!! Form::text('name', Input::old('name'), array('id' => 'name', 'class' => 'form-control')) !!}
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
                            <label class="col-md-4 control-label" for="file">Filename:</label>
                            <div class="col-md-6">
                                <input type="file" multiple name="file[]" id="file"><br>
                            </div>
                        </div>



                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-success" value="Upload Image">
                        </div>
                    {!! Form::close() !!}
                </div>


                <div class="progress progress-striped active">
                  <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0"
                  aria-valuemax="100" style="width: 0%">
                    <span class="sr-only">0% Complete</span>
                  </div>
                </div>
                <div class="image"></div>

            </div>
        </div>
    </div>
</div>
@endsection

