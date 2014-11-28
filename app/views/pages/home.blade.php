@extends('layouts.default')

@section('content')

     <div class="jumbotron">
            <h1>Welcome to BirdieBook.</h1>
            <p>Yet another social network mock-up.</p>
            @if( ! $currentUser )
                <p>
                {{ link_to_route('register_path', 'Sign up', null, ['class' => 'btn btn-lg btn-primary']) }}
                </p>
            @endif
          </div>

@endsection
