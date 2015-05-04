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
                        <pre>ID: {{ $file->id}}   {{ $file->arquivo }}</pre>
                        <pre>TIPO: {{ $file->extensao }}</pre> <br />
                        @endforeach
                    </div>
                    <br>
                    <div>
                        <hr />
                        @if (count($primeiro))
                        {{ $primeiro->id }} - {{ $primeiro->extensao }}
                        @endif
                    </div>

                    <div>
                        @foreach($filtroPorExtensao as $file)
                        {{ $file->arquivo }} -----  {{ $file->extensao  }}<br />
                        @endforeach
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</div>

@endsection 