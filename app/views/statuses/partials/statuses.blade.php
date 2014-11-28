@forelse($statuses as $status)
    @include('statuses.partials.status', ['status' => $status])
@empty
    <p>This user has not posted any statuses yet.</p>
@endforelse
