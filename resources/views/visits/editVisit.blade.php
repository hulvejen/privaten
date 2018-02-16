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

                              <h2>Ret aftale:</h2>
                              <form action="{{ route('visit.update', $visit->id) }}" enctype="multipart/form-data" method="POST" >

                                  {{method_field('PUT')}}

                                  {{ csrf_field() }}

                                  <p>
                                      <label for="date">Dato</label>
                                      <input type="date" name="date" id="date" class="form-control" value={{ $visit->visitdate}}  >

                                      <label for="time">Klokken</label>
                                      <input type="time" name="time" id="time" class="form-control" value={{ $visit->visittime }} >

                                      <label for="agreement">Aftale	</label>
                                      <input type="text" name="agreement" id="agreement" class="form-control" value={{$visit->agreement}} >


                                  </p>
                                  <p>
                                      <input type="submit" class="btn btn-primary" value="Godkend" />

                                  </p>

                              </form>




                          </div>

                          <div class="col-md-6 ">

                              <div>
                              <h2>Afslut aftale:</h2>
                                  <form action="{{ route('visit.update', $visit->id) }}" enctype="multipart/form-data" method="POST" >
                                      {{method_field('PUT')}}
                                      {{ csrf_field() }}

                                      <p>
                                          <label for="jobcomment">Kommentar til opgave -Kan ses af kunden.	</label>
                                          <input type="text" name="jobcomment" id="jobcomment" class="form-control"   >
                                      </p>

                                      <p>
                                          <input type="submit" class="btn btn-primary btn-warning" value="Afslut" />
                                      </p>


                                  </form>
                              </div>

                              <div>
                              <h2>Slet aftale:</h2>
                              <div>En aftale må først slettes <i>efter</i> det er aftalt med kunden.</div>
                              <a href="{{ route('visit.destroy', $visit->id) }}" class="btn btn-info btn-danger" role="button">! Slet aftale !</a>
                              </div>

                          </div>


                      </div>


				  </div>
			</div>
		</div>

	</div>
</div>
@endsection