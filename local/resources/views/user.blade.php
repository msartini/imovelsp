@extends('layout')

@section('content')

<p>This is the user content</p>


<?php echo $css->getCss();?>
<br>
<?php echo $css->getJs();?>

@section('footer')


@stop
