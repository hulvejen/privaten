@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				
				<h1>Bruger oversigt</h1>
				<h3>{{ $user->name}}</h3>

					
				<hr />				
				
			</div>
		</div>
	</div>
</div>
@endsection