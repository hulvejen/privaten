@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				
				<h1 class="text-center">Min konto</h1>
				
				<form action="{{ route('abbsupdate', $users[0]->id ) }}" enctype="multipart/form-data" method="POST" >
					
					{{method_field('PUT')}}
					
					{{ csrf_field() }}
					
					<h2>Konto oplysninger:</h2>

					<p>										
						
					<label for="address">Adresse	</label>				
					<input type="text" name="address" id="address" class="form-control " value="{{$abbinfo[0]->address}}"  >

					<label for="zipcode">Postnummer	</label>				
					<input type="text" name="zipcode" id="zipcode" class="form-control " value="{{$abbinfo[0]->zipcode}}"  >
						
					<label for="city">By	</label>				
					<input type="text" name="city" id="city" class="form-control " value="{{$abbinfo[0]->city}}"  >
						
					<label for="phone">Mobil  </label>				
					<input type="text" name="phone" id="phone" class="form-control " value="{{$abbinfo[0]->phone}}" >
					
					</p>
					<p>
					<input type="submit" class="btn btn-primary" value="Opdater" />					
					
					</p>
					
			    </form>
				
			</div>
		</div>
	</div>
</div>
@endsection