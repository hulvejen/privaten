@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Muligheder</div>
				<div class="col-md-9 "></div>
				<div class="col-md-3 ">
					<a href="{{ route('handy.dashboard') }}" class="btn btn-info " role="button">Mine</a>
					<a href="{{ route('handy.showOpen',1) }}" class="btn btn-info " role="button">Mulige</a>
					<a href="{{ route('handy.showDone',1) }}" class="btn btn-info btn-warning" role="button">Udførte</a>
				</div>

				  <div class="panel-body">

					  <div class="container-fluid">
						  <h2>Aftaler</h2>
						  <div class="table-responsive">
							  <table class="table">
								  <thead>
								  <tr>
									  <th>Dato</th>
									  <th>Kl</th>
									  <th>By</th>
									  <th>Adresse</th>
									  <th>Navn</th>
									  <th>Opgaver</th>
									  <th>Antal timer</th>
									  <th>Email</th>
									  <th>Telefon</th>

								  </tr>
								  </thead>
								  <tbody>



								  {{--Det er indgåede aftaler der er interessante--}}
								  @foreach($visits as $visit)

									  <tr>
										  <td><a>27-03-2018</a></td>
										  <td>8:00</td>
										  <td>{{$abbinfo[0]->city}}</td>
										  <td>{{$abbinfo[0]->address}}</td>
										  <td>{{$visit->user->name}}</td>
										      {{$task = ""}}
										  @if (count($visit->user->task))
											  {{ $task = substr($visit->user->task->task,0,10)}}
											  {{--Skal rettes til så det er et link der peger på alle uafsluttede task.--}}
										  @endif
										  <td>{{$task}}</td>
										  <td>3</td>
										  <td>{{$visit->user->email}}</td>
										  <td>{{$visit->user->abbinfo->phone}}</td>
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