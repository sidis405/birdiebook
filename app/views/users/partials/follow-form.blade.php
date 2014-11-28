@if($signedIn)
    @if($user->isFollowedBy($currentUser))
         {{ Form::open(['method' => 'delete', 'route' => ['unfollow_path', $user->id]]) }}
            {{ Form::hidden('userIdToUnFollow', $user->id) }}
            <button type="submit" class="btn btn-danger">Unfollow {{ $user->username }}</button>
         {{ Form::close() }}
    @else
        {{ Form::open(['method' => 'post', 'route' => ['follow_path']]) }}
            {{ Form::hidden('userIdToFollow', $user->id) }}
            <button type="submit" class="btn btn-primary">Follow {{ $user->username }}</button>
        {{ Form::close() }}
    @endif
@endif