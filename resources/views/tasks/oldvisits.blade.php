@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">Besøgsarkiv </div>

				<div class="panel-body">

					<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th>Dato</th>
								<th>Aftale</th>
								<th>Jobkommentar</th>
								<th>Handyman</th>
								<th>Tidsforbrug</th>
							</tr>
							</thead>

							<tbody>
							{{--Det er indgåede aftaler der er interessante--}}
							@foreach($visits as $visit)
								<tr>
									<td>{{$visit->visitdate}}</td>
									<td>{{$visit->agreement}} </td>
									<td>{{$visit->jobcomment}}</td>
									<td>{{$visit->handy->name}}</td>
									<td>Tidsforbrug</td>

								</tr>
							@endforeach

							</tbody>
						</table>
					</div>







				</div>


				<hr />
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection