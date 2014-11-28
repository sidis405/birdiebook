@extends('layouts.default')

@section('content')


<div class="row">

    <div class="col-md-4">

        <div class="media">
            <div class="pull-left">
                 @include('users.partials.avatar', ['size' => 50])
            </div>

            <div class="media-body">
                <h1 class="media-heading">
                    {{ $user->username }}
                </h1>

                <ul class="list-inline text-muted">
                    <li>{{ $user->present()->statusCount($user) }}</li>
                    <li>{{ $user->present()->followerCount($user) }}</li>
                </ul>


                 @foreach($user->followers as $follower)

                     @include('users.partials.avatar', ['user' => $follower,'size' => 25])

                 @endforeach

            </div>

        </div>


    </div>

    <div class="col-md-6">

        @if( ! $user->is($currentUser))
             @include('users.partials.follow-form')
         @endif

        @if($user->is($currentUser))
            @include('statuses.partials.publish-status-form')
        @endif

        @include('statuses.partials.statuses', ['statuses' => $user->statuses])
    </div>

</div>


@endsection