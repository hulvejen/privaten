		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

					<!-- Branding Image -->
					@guest()
					<a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Priværten') }}
                    </a>
					@else

						@if (Auth::guard('admin')->check())
							<a class="navbar-brand" href="{{ url('/admin') }}">
								{{ config('app.name', 'Priværten') }}
							</a>
						@elseif (Auth::guard('handy')->check())
							<a class="navbar-brand" href="{{ url('/handy') }}">
								{{ config('app.name', 'Priværten') }}
							</a>

						@else
							<a class="navbar-brand" href="{{ url('/home') }}">
								{{ config('app.name', 'Priværten') }}
						@endif

					@endguest


                 
				</div>
				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@guest
						<li><a href="{{ route('social.login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
									@if (Auth::guard('web')->check())
									    <a href="{{ route('myaccount', Auth::user()->id) }}">Min konto</a>
									@elseif (Auth::guard('handy')->check())
											<a href="{{ route('handy.show', Auth::user()->id) }}">Handy konto</a>
									@endif

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
								
							</ul>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>