@extends( "app" )

@section( "content" )

<div class = "container" >
    <div class = "row" >
        <h1>{{ $titulo }}</h1>
        <div class = "col-md-10 col-md-offset-1" >
            <div class = "panel panel-default" >
                <div class="panerl-heading" >Produtos</div>
                <div class="panel-body" >
                   Arquivos
                   <div>
                        @foreach($files as $file)
                            {{ $file->arquivo }} <br />
                        @endforeach
                   </div>
                   <br>
                   <div>
                        <hr />
                        {{ $primeiro->id }} - {{ $primeiro->extensao }}
                      
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 