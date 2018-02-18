@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">Opgave </div>

				<div class="panel-body">


				<div class="col-md-6 ">

				@if ( isset($task->image))
					@php $path='storage/uploads/'.$task->image @endphp
				@else
					@php $path='storage/uploads/handyman-tools.png' @endphp
				@endif

				<img src={{ asset($path) }} width="250px" class="img-responsive " />
				</div>



				<div class="col-md-6 ">
					<h3>Opgave beskrivele</h3>

					<form action="{{ route('task.update',$task->id ) }}" enctype="multipart/form-data" method="POST" >
						{{method_field('PUT')}}
						{{ csrf_field() }}

						<p>
							<label for="task">Opgavebeskrivelse</label>
							<input type="text" name="task" id="task" class="form-control" value="{{ $task->task}}"  >
						</p>
						<p>
							<label for="done">Opgave løst </label>
							<input type="checkbox" name="done" id="done"  >
						</p>

						<p>
							<input type="submit" class="btn btn-primary " value="Opdater" />
						</p>

					</form>


				</div>


				<hr />
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection