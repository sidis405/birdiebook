@extends('layouts.default')

@section('content')

     <div class="jumbotron">
            <h1>Welcome to LaraBook.</h1>
            <p>Welcome to yet another social network mockup.</p>
            @if( ! $currentUser )
                <p>
                {{ link_to_route('register_path', 'Sign up', null, ['class' => 'btn btn-lg btn-primary']) }}
                </p>
            @endif
          </div>

@endsection