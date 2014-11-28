<a href="{{ route('profile_path', $user->username) }}">
    <img class="avatar media-object " src="{{ $user->present()->gravatar(isset($size) ? $size : 30) }}" alt="{{$user->username}}" title="{{$user->username}}"/>
</a>