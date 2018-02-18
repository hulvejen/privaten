@extends('layouts.app') @section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">


				<div class="panel-heading">Velkommen {{ $users[0]->name }}  </div>

				<div class="col-md-9 "></div>

				<div class="col-md-3  text-right">
					<a href="{{ route('overview') }}" class="btn btn-info btn-warning" role="button"> Opgaver løst</a>
					<a href="{{ route('handy.showDone',1) }}" class="btn btn-info" role="button">     Besøg</a>
				</div>

				<div class="col-sm-12 ">
					<h4>Næste aftale - {{ $abbinfo[0]->next_scheduled_date }} kl  </h4>
				</div>

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
							{{--<h3>Bedste aftale tidspunkter </h3>
							@if(count($schedules)>0)
							   <a href="{{ route('schedules.edit', $schedules[0]->id) }}" class="btn btn-info" role="button">Ret Foretrukket aftaletidspunkt</a>
							@else
							   <a href="{{ route('schedules.create') }}" class="btn btn-info" role="button">Foretrukket aftaletidspunkt</a>
							@endif--}}
						</div>
					</div>
					<hr>
					
					<div class="row">
						<div class="col-sm-12 ">
							<h3>Opgaver</h3>

							@php $i=0; @endphp


							@foreach($tasks as $task)
								@php $i= $i+1; @endphp

								@if($i==4)
									<div class="row">
										<div class="col-sm-12 ">
								@endif

								<div class="col-sm-4" >
									<div>
										<h4><a href=" {{ route('tasks.show', $task->id)}}" >{{ $task->task}}</a></h4>
									</div>

									<div>
										@if ( isset($task->image))
										   @php $path='storage/uploads/'.$task->image;
										   $with = '150px'; @endphp
										@else
										   @php $path='storage/uploads/handyman-tools.png';
										   $with = '120px'; @endphp
										@endif

										<img src={{ asset($path) }} width= @php $with @endphp class="img-responsive " />

									</div>

								</div>


								@if($i==4)
										</div>
									</div>
								@endif

							@endforeach

						</div>
					</div>

					<hr>
					
					<div class="row">
						<div class="col-sm-12 ">

							<p class="aftaler">Timer til rest til 31/11 2018: </p>
							4

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
