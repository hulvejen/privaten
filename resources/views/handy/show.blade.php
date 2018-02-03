@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Aftaleoversigt</div>

				  <div class="panel-body">


					  <div class="col-md-6 ">
						<h4>{{$handy[0]->name}}</h4>
						  <p>{{$handy[0]->handymen->address}}</p>
						  <p>{{$handy[0]->handymen->zipcode . " " . $handy[0]->handymen->city}}</p>
						  <p>{{$handy[0]->email}}</p>
						  <p>Mobil {{$handy[0]->handymen->phone}}</p>

					  </div>
					  <div class="col-md-6 ">
						  <h4>Konto</h4>

					  </div>

					  <div class="col-md-12 ">


					  </div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection