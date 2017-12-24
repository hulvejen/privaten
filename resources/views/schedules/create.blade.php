@extends('layouts.app') @section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/schedule.css') }}">


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				
				<h1 class="text-center">Bedste aftale tidspunkter</h1>
		
				<form action="{{ route('schedules.store')}}@yield('editId')" enctype="multipart/form-data" method="POST" id="regForm">
					
					{{ csrf_field() }}					
					@section('editMethod')  //Ignored when create as this is only valid for edit.
					  @show
										
					Vælg de ugedage og tidsrum der passer dig bedst.
					<p>Eksempel: Mandag, Onsdag <b>Næste</b> 15-18</p> 
					   						
					<div class="tab">Ugedag:
					  <p><input placeholder="Ugedag" oninput="this.className = ''" name="dag" id="dag" value="@yield('editWeekday')"></p>
					</div>
					
					<div class="tab">Tid på dagen:
					  <p><input placeholder="Tid på dagen" oninput="this.className = ''" name="tid" id="tid" value="@yield('editTime')"></p>
					</div>
					

					<div style="overflow:auto;">
					  <div style="float:right;">
						<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
						<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
					  </div>
					</div>					

					<!-- Circles which indicates the steps of the form: -->
					<div style="text-align:center;margin-top:40px;">
					  <span class="step"></span>
					  <span class="step"></span>

					</div>
					
			    </form>
				
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('js/schedule.js') }}" ></script>

@endsection