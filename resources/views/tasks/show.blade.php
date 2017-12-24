@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				
				<h1>Opgave gemt</h1>
				<h3>{{ $task->task}}</h3>
								
                    
				<!--First create a storage link by typing in: php artisan storage:link -->
				@php $path='storage/uploads/'.$task->image @endphp   
				

				<img src={{ asset($path) }} width="350px" class="img-responsive center-block" />
				
				<a href="../home" class="btn btn-info" role="button">Til oversigt</a>
					
				<hr />				
				
			</div>
		</div>
	</div>
</div>
@endsection