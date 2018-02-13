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
                      <h3>Aftale</h3>

                      <div class="container-fluid">
                          <div class="col-md-12 ">
                              <table  style="border-spacing: 10px;">
                                  <tbody>
                                  <tr>
                                      <td>Dato</td>
                                      <td><input type="date"></td>
                                      <td>Klokken</td>
                                      <td> <input type="time"></td>
                                  </tr>
                                  <tr>
                                      <td>Aftale</td>
                                      <td colspan="3"> <input type="text"></td>

                                  </tr>
                                  </tbody>
                              </table>
                              <br>
                              <button>Godkend aftale</button>

                          </div>
                      </div>


				  </div>
			</div>
		</div>

	</div>
</div>
@endsection