@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				
				<h1>Opgaver</h1>
				

				@foreach($tasks as $task)
				
					<!--First create a storage link by typing in: php artisan storage:link -->
					@php $path='storage/uploads/'.$task->image @endphp 
				
					<div class="well">
						<h4>Opdateret: {{ $task->updated_at}}</h4>
						<h3>{{ $task->task}}</h3>
						
						<img src={{ asset($path) }} height="150px" class="img-responsive center-block" />
	
						<a href=" {{ route('tasks.show', $task->id)}}" class="btn btn-primary btn-sm">View Details</a>
					</div>
				    
				@endforeach
				
				
			</div>
			{{ $tasks->links() }}  <!--Used if more than 1 page to show. Will only work if we use paginate in TaskController-->
		</div>
	</div>
</div>
@endsection