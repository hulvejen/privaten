@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Muligheder</div>
				<div class="col-md-9 "></div>
				<div class="col-md-3 ">
					<a href="{{ route('handy.dashboard') }}" class="btn btn-info " role="button">Mine</a>
					<a href="{{ route('handy.showOpen') }}" class="btn btn-info btn-warning" role="button">Mulige</a>
					<a href="{{ route('handy.showDone',1) }}" class="btn btn-info " role="button">Udførte</a>
				</div>

				<div class="panel-body">

					<div class="container">
						<h2>Aftaler</h2>
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>By</th>
									<th>Postnummer</th>
									<th>Dato</th>
									<th>Tid</th>
									<th>Navn</th>
									<th>Opgaver</th>
									<th>Rest timer</th>
									<th>Email</th>
									<th>Telefon</th>

								</tr>
								</thead>
								<tbody>

								{{--Det er indgåede aftaler der er interessante--}}
								@foreach($users as $user)
									<tr>
										<td>{{$user->abbinfo->city}}</td>
										<td>{{$user->abbinfo->zipcode}}</td>
										<td>{{$user->abbinfo->next_scheduled_date}}</td>
										<td></td>
										<td>{{$user->name}}</td>
										{{$task = ""}}
										@if (count($user->task))
											{{ $task = substr($user->task->task,0,10)}}
											{{--Skal rettes til så det er et link der peger på alle uafsluttede task.--}}
										@endif
										<td>{{$task}}</td>
										<td>3</td>
										<td>{{$user->email}}</td>
										<td>{{$user->abbinfo->phone}}</td>
									</tr>
								@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection