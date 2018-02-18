@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				
				<h1>Opgaver</h1>
				

				@foreach($tasks as $task)
				
					<!--First create a storage link by typing in: php artisan storage:link -->

					<div class="well">
						<h4>Opdateret: {{ $task->updated_at}}</h4>
						<h3>{{ $task->task}}</h3>

						@if ( isset($task->image))
							@php $path='storage/uploads/'.$task->image;
										   $with = '150px'; @endphp
						@else
							@php $path='storage/uploads/handyman-tools.png';
										   $with = '120px'; @endphp
						@endif

						<img src={{ asset($path) }} width= @php $with @endphp class="img-responsive  center-block" />


					</div>
				    
				@endforeach
				
				
			</div>
			{{ $tasks->links() }}  <!--Used if more than 1 page to show. Will only work if we use paginate in TaskController-->
		</div>
	</div>
</div>
@endsection