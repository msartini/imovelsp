@extends('layout')

@section('content')

<h1>{{$titulo}}</h1>
<p>This is the user content</p>


<?php echo $css->getCss();?>
<br>
<?php echo $css->getJs();?>

@section('footer')


@stop
