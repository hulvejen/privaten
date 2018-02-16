@extends('layouts.app') @section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Mine aftaler</div>
                <div class="col-md-9 "></div>
                <div class="col-md-3 ">
                    <a href="{{ route('handy.dashboard') }}" class="btn btn-info btn-warning" role="button">Mine</a>
                    <a href="{{ route('handy.showOpen') }}" class="btn btn-info" role="button">             Mulige</a>
                    <a href="{{ route('handy.showDone',1) }}" class="btn btn-info" role="button">           Udførte</a>
                </div>


				<div class="panel-body">

					<div class="container-fluid">

						<h2></h2>
						@if ( $noVisitsPlanned==1 )
							<h3>{{ 'Du har ingen aftaler der venter' }}</h3>
						@else
							<div class="table-responsive">
								<table class="table">
									<thead>
									<tr>
										<th>Dato</th>
										<th>Kl</th>
										<th>By</th>
										<th>Adresse</th>
										<th>Navn</th>
										<th>Aftalte opgaver</th>
										<th>Antal timer</th>
										<th>Email</th>
										<th>Telefon</th>
									</tr>
									</thead>
									<tbody>

									{{--Det er indgåede aftaler der er interessante--}}
									@foreach($visits as $key => $visit)
											<tr>

												<td><a href="{{ route('visit.editMyVisit', $visit->id) }}">{{$visit->visitdate}}</a></td>
													<td>{{substr($visit->visittime,0,5)}}</td>
													<td>{{$abbinfos[$key]->city}}</td>
													<td>{{$abbinfos[$key]->address}}</td>
													<td>{{$visit->user->name}}</td>

													<td>
														<div>{{ substr($visit->agreement,0,15)}}</div>
													</td>

													<td>3 (hc)</td>
													<td>{{$visit->user->email}}</td>
													<td>{{$abbinfos[$key]->phone}}</td>
											</tr>
									@endforeach

									</tbody>
								</table>
							</div>
						@endif

					</div>

				</div>

			</div>
		</div>
	</div>
</div>
@endsection


