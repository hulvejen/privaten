@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				
				<div class="panel-heading">Min konto</div>
				
				<div class="panel-body">
					<div class="row">
							<div class="col-sm-6 ">
								<h3>Adresse oplysninger</h3>
								<p>{{$user->name}}</p>
								<p>{{$abbinfo[0]->address}}</p>
								<p>{{$abbinfo[0]->zipcode. " " . $abbinfo[0]->city}}</p>
								<p>{{$abbinfo[0]->email}}</p>
								<p>Mobil {{$abbinfo[0]->phone}}</p>
							</div>
							<div class="col-sm-6 text-left">
								<h3>Abonnement</h3>
								<p>Abb start dato: {{$abbinfo[0]->abb_date}}</p>
													
								<p>Næste betaling -  {{$abbinfo[0]->next_scheduled_date}}<br>kr 200</p>

							</div>
						
						</div>
					<a href="{{ route('xyz', Auth::user()->id) }}" class="btn btn-info" role="button">Ret</a>
				</div>
				
			</div>			
		</div>
	</div>
</div>
@endsection

