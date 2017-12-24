@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				
				<h1 class="text-center">Opret opgave</h1>
				
				<form action="{{ route('tasks.store')}}" enctype="multipart/form-data" method="POST">
					
					{{ csrf_field() }}
					<p>
					<h2>Beskriv opgaven:</h2>
					</p>
					@if ($errors->any())  <!--This will handle PHP exceptions, If image max size to small in php.ini you will have a problem :-)-->
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				
					<p>
					Opgaven bedes beskrives så præcist som muligt. Tag gerne et billede af problemet og vedlæg det beskrivelsen.
										
					<label for="task">	</label>				
					<textarea type="text" name="task" id="task" class="form-control " rows="6" ></textarea>							
					
					<label>Vælg billede:</label>
				    <input type="file" class="form-control" name="image" id="image" accept="image/*" capture="camera" >
						
					</p>
					<p>
					<input type="submit" class="btn btn-primary" value="Send opgave" />					
					
					</p>
					
			    </form>
				
			</div>
		</div>
	</div>
</div>
@endsection