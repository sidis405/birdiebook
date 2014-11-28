@extends('layouts.default')

@section('content')

    @foreach($users->chunk(4) as $row)

        <div class="row users">

            @foreach($row as $user)
                <div class="col-md-3 user-block">
                    @include('users.partials.avatar', ['size' => 70])

                    <h4 class="user-block-username">
                        {{ link_to_route('profile_path', $user->username, $user->username) }}
                        {{--{{ link_to_route('profile_path', join(" ", [$user->username, count($user->statuses)]), $user->username) }}--}}

                    </h4>
                </div>
            @endforeach

        </div>

    @endforeach

{{ $users->links() }}

@endsection

