@extends('layouts.app') @section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">ADMIN dashboard</div>

				<div class="panel-body">

					<div class="container">
						<h2>Table</h2>
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>Navn</th>
									<th>By</th>
									<th>Planlagt besøg</th>
									<th>Sidste besøg</th>
									<th>Opgaver</th>
									<th>Betalt</th>
									<th>Timer rest</th>
									<th>Abb måned</th>
									<th>Telefon</th>

								</tr>
								</thead>
								<tbody>
								@foreach($users as $user)
									<tr>
										<td>{{$user->name}}</td>
										<td>{{$user->abbinfo->city}}</td>
										<td>{{$user->abbinfo->next_scheduled_date}}</td>
										<td>NIP</td>
										<td>Ja</td>
										<td>Ja</td>
										<td>4</td>
										<td>{{$user->abbinfo->abb_date}}</td>
										<td>30303030</td>
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


