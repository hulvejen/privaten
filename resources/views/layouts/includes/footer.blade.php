		<div class="footer">
			<div class="row">
				<div class="col-sm-2 "></div>
				<div class="col-sm-3 ">
					@if ( Agent::isMobile())  <!-- composer require jenssegers/agent -->
					<a href="{{ route('footerpages.about') }}" class="btn btn-color" role="button">Om</a>
					@else
					<a href="{{ route('footerpages.about') }}" class="btn btn-color" role="button">Om privaten</a>
					@endif
					
				</div>
				<div class="col-sm-2 ">
					<a href="{{ route('footerpages.privacy') }}" class="btn  btn-color" role="button">Privatliv</a>				
				</div>
				<div class="col-sm-3 ">
					<a href="{{ route('footerpages.contact') }}" class="btn  btn-color" role="button">Kontakt</a>
				</div>
				<div class="col-sm-2 "></div>
				</div>
		</div>