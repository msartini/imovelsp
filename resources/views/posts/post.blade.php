@extends( "app" )

@section( "content" )

<div class = "container" >
    <div class = "row" >
        <h1>{{ $titulo }}</h1>
        <div class = "col-md-10 col-md-offset-1" >
            <div class = "panel panel-default" >
                <div class="panerl-heading" >Imagens</div>
                <div class="panel-body" >
                   Arquivos
                   <div>
                        {!! var_dump($posts) !!}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection