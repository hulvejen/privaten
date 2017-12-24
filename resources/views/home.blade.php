@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Velkommen Torsten</div>

				<div class="panel-body">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif
					

					<div class="row">
						<div class="col-sm-6 ">
							<h3>Opret ny opgave</h3>
							<a href="{{ route('tasks.create') }}" class="btn btn-info" role="button">Ny Opgave</a>
						</div>
						<div class="col-sm-6 text-right">
							<h3>Bedste aftale tidspunkter </h3>
							@if(count($schedules)>0)
							   <a href="{{ route('schedules.edit', $schedules[0]->id) }}" class="btn btn-info" role="button">Ret Foretrukket aftaletidspunkt</a>
							@else
							   <a href="{{ route('schedules.create') }}" class="btn btn-info" role="button">Foretrukket aftaletidspunkt</a>
							@endif
						</div>
					</div>
					<hr>
					
					<div class="row">
						<div class="col-sm-12 ">
							<h3>Seneste opgaver</h3>
							
							@foreach($tasks as $task)
			
								<div class="well">
									<h4>Opdateret: {{ $task->updated_at}}</h4>
									<h3>{{ $task->task}}</h3>									
									<a href=" {{ route('tasks.show', $task->id)}}" class="btn btn-primary btn-sm">Se detaljer</a>
								</div>
								
							@endforeach
														
							<a href="{{ route('overview') }}" class="btn btn-info" role="button">Se Alle opgaver</a>

						</div>
					</div>
					<hr>
					
					<div class="row">
						<div class="col-sm-12 ">

							<p class="aftaler">Timer til rest til 31/11 2018: </p>
							4

						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-12 ">

							<p class="aftaler"> Tidligere aftaler</p>
							<p>21/16 2013 - Gennemgang af ejendom - 1 time

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
