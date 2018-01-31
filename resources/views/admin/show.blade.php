@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">Aftaleoversigt</div>

				  <div class="panel-body">

					  <div class="col-md-6 ">
						<h4>{{ $user->name}}</h4>
						<div>{{$abbinfo->address}}</div> <div>{{$abbinfo->zipcode}} {{$abbinfo->city}}</div> <div>{{$abbinfo->phone}}</div>
					  </div>
					  <div class="col-md-6 ">
						  <h4>Konto</h4>
						  <div>Betaling ok - {{$abbinfo->payed}}</div>
					  </div>

					  <div class="col-md-12 ">

						<form action="{{ route('abbsupdate', $user->id ) }}" enctype="multipart/form-data" method="POST" >

							{{method_field('PUT')}}

							{{ csrf_field() }}


							<h2>Aftale kalender:</h2>

							<p>
								<label for="address">Opgaver	</label>
								<input type="text" name="address" id="address"  class="form-control "  value="{{$abbinfo->address}}" >

								<label for="zipcode">Næste besøg</label>
								<input type="text" name="zipcode" id="zipcode" class="form-control " value="{{$abbinfo->next_scheduled_date}}" >

								<label for="city">Handymand</label>
								<input type="text" name="city" id="city" class="form-control " value="{{$abbinfo->city}}" >

								<label for="phone">Aftalt med kunde </label>
								<input type="text" name="phone" id="phone" class="form-control " value="{{$abbinfo->phone}}" >

								<label for="phone">Besøg afsluttet </label>
								<input type="text" name="phone" id="phone" class="form-control " value="{{$abbinfo->phone}}" >

								<label for="phone">Evt kommentar, kunde </label>
								<input type="text" name="phone" id="phone" class="form-control " value="{{$abbinfo->phone}}" >

								<label for="phone">Evt kommentar, handyman </label>
								<input type="text" name="phone" id="phone" class="form-control " value="{{$abbinfo->phone}}" >



							</p>
							<p>
								<input type="submit" class="btn btn-primary" value="Opdater" />

							</p>

						</form>

					  </div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection