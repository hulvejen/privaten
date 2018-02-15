@extends('layouts.app') @section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Mine opgaver</div>


				  <div class="panel-body">

					  <div class="container-fluid">

                          <div class="col-md-6 ">
                              <div>{{$visit->user->name}}</div>
                              <div>{{$abbinfo->address}}</div>
                              <div>{{$abbinfo->zipcode}} {{$abbinfo->city}}</div>
                              <div>{{$abbinfo->phone}}</div>
                          </div>


                          <div class="col-md-6 ">
							  <div style="font-weight: bold">Aftale</div>

                              <div>
                                 {{$visit->agreement}}
							  </div>

                          </div>

					  </div>

                      <hr>

                      <div class="container-fluid">
                          <div class="col-md-6 ">

                              <form action="{{ route('visit.update', $visit->id) }}" enctype="multipart/form-data" method="POST" >

                                  {{method_field('PUT')}}

                                  {{ csrf_field() }}

                                  <h2>Ret aftale:</h2>

                                  <p>
                                      <label for="date">Dato</label>
                                      <input type="date" name="date" id="date" class="form-control" value={{ $visit->visitdate}}  >

                                      <label for="time">Klokken</label>
                                      <input type="time" name="time" id="time" class="form-control" value={{ $visit->visittime }} >

                                      <label for="agreement">Aftale	</label>
                                      <input type="agreement" name="agreement" id="agreement" class="form-control" value={{$visit->agreement}} >


                                  </p>
                                  <p>
                                      <input type="submit" class="btn btn-primary" value="Godkend" />

                                  </p>

                              </form>





                          </div>
                      </div>


				  </div>
			</div>
		</div>

	</div>
</div>
@endsection