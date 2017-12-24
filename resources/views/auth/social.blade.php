@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if ($errors->has('msg'))
                    <div class="alert alert-warning">
                        {{ $errors->first('msg') }}
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading text-center">Social Login </div>

                    <div class="panel-body">

                        <p class="lead text-center">Log ind via en af nedenstående sociale tjenester.</p>

                        <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                            Log ind med Facebook
                        </a>

                        <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                            Log ind med Twitter
                        </a>

                        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                            Log ind med Google
                        </a>


                        <hr>

                        <a href="{{ route('login') }}" class="btn btn-default btn-block">
                            Log ind med Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection