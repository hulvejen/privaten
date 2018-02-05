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
					<a href="{{ route('tasks.create',1) }}" class="btn btn-info btn-warning" role="button">Udførte</a>
				</div>

				  <div class="panel-body">

					Her skal vises tidligere udførte opgaver.

                  </div>

			</div>
		</div>
	</div>
</div>
@endsection