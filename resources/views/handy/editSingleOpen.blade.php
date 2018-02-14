@extends('layouts.app') @section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">

				<div class="panel-heading">HANDY Muligheder</div>


				  <div class="panel-body">

					  <div class="container-fluid">

                          <div class="col-md-6 ">
                              <div>{{$user[0]->name}}</div>
                              <div>{{$user[0]->abbinfo->address}}</div>
                              <div>{{$user[0]->abbinfo->zipcode}} {{$user[0]->abbinfo->city}}</div>
                              <div>{{$user[0]->abbinfo->phone}}</div>
                          </div>


                          <div class="col-md-6 ">
							  <div style="font-weight: bold">Opgaver</div>
							  @foreach($tasks as $task)
                              <div>
                                 {{$task->task}}
							  </div>
							  @endforeach
                          </div>

					  </div>

                      <hr>

                      <div class="container-fluid">
                          <div class="col-md-6 ">



                              <form action="{{ route('visit.store', $user[0]->id ) }}" enctype="multipart/form-data" method="POST" >

                                  {{method_field('PUT')}}


                                  {{ csrf_field() }}

                                  <h2>Opret aftale:</h2>

                                  <p>

                                      <input type="hidden" name="handymanId" value= {{$handyman[0]->id}}>

                                      <label for="date">Dato</label>
                                      <input type="date" name="date" id="date" class="form-control "   >

                                      <label for="time">Klokken</label>
                                      <input type="time" name="time" id="time" class="form-control "  >

                                      <label for="agreement">Aftale	</label>
                                      <input type="agreement" name="agreement" id="agreement" class="form-control "  >


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