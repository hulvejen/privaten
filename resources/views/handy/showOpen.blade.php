@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">Mulige kunde opgaver</div>
				<div class="col-md-9 "></div>
				<div class="col-md-3 ">
					<a href="{{ route('handy.dashboard') }}" class="btn btn-info " role="button">Mine</a>
					<a href="{{ route('handy.showOpen') }}" class="btn btn-info btn-warning" role="button">Mulige</a>
					<a href="{{ route('handy.showDone',1) }}" class="btn btn-info " role="button">Udførte</a>
				</div>

				<div class="panel-body">

					<div class="container-fluid">
						<h2></h2>
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


								</tr>
								</thead>

								<tbody>
								{{--Det er indgåede aftaler der er interessante--}}
								@foreach($users as $user)
									<tr>
										<td><a href="{{ route('handy.editSingleOpen',$user->id) }}">{{$user->abbinfo->city}}</a></td> {{-- 1 skal ændres til rigtig kunde nr--}}
										<td>{{$user->abbinfo->zipcode}}</td>
										<td>{{$user->abbinfo->next_scheduled_date}}</td>
										<td>8:00 (hc)</td>
										<td>{{$user->name}}</td>
										@if (count($user->task))
											<?php $task = substr($user->task->task,0,10)?>
											{{--Skal rettes til så det er et link der peger på alle uafsluttede task.--}}
											@else
											<?php $task = ''; ?>
										@endif
										<td>{{$task}}</td>
										<td>3 hc</td>

									</tr>
								@endforeach

								@foreach($usrs as $usr)

									<tr>
										<td><a href="{{ route('handy.editSingleOpen',$usr->id) }}">{{$usr->abbinfo->city}}</a></td>
										<td>{{$usr->abbinfo->zipcode}};</td>
										<td>{{$usr->abbinfo->next_scheduled_date}};</td>
										<td>8:00 hc</td>
										<td>{{$usr->name}};</td>
										@if (count($usr->task))
                                            <?php $task = substr($usr->task->task,0,10)?>
											{{--Skal rettes til så det er et link der peger på alle uafsluttede task.--}}
										@else
                                            <?php $task = ''; ?>
										@endif
										<td>{{$task}}</td>
										<td>3 hc</td>
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