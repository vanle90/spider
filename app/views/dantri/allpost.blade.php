@extends('layouts.master')
@section('content')
<div class="row">
@for($flag=0; $flag< count($title); $flag++)	
		<div class="col-md-6">
			<div class="single-post">
				<h2><a href="{{$links[$flag]}}" >{{$title[$flag]}}</a></h2>
				<div class="row">
					<div class='col-md-8'>
						<p>{{$description[$flag]}}</p>
					</div>
					<div class='col-md-4'>
						<img class="img-responsive" alt="" src="{{$images[$flag]}}">
					</div>
				</div>
			</div>
		</div>
		@if($flag%2==0)
	</div>
	<div class="row">
	@endif
	@endfor
	
</div>
<p>{{$description[0]}}</p>
@stop