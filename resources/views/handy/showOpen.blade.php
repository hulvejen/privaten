@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Muligheder</div>
				<div class="col-md-9 "></div>
				<div class="col-md-3 ">
					<a href="{{ route('handy.dashboard') }}" class="btn btn-info " role="button">Mine</a>
					<a href="{{ route('handy.showOpen',1) }}" class="btn btn-info btn-warning" role="button">Mulige</a>
					<a href="{{ route('handy.showDone',1) }}" class="btn btn-info " role="button">Udførte</a>
				</div>

				  <div class="panel-body">

                      <div>Her skal vises kunder uden aftaler som vores handyman kan acceptere.</div>
                      <div> Accepterede aftaler skal blokeres indtil aftale er indgået.</div>
                      <div>Først herefter kan den ses under "Mine"</div>


                  </div>

			</div>
		</div>
	</div>
</div>
@endsection