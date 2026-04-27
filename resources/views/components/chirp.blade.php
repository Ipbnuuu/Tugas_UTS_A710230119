<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex justify-between items-start">
            <h3 class="card-title">{{ $chirp->user ? $chirp->user->name : 'Anonymous' }}</h3>
            @can('update', $chirp)
            <div class="flex gap-2">
                <a href="/chirps/{{ $chirp->id }}/edit" class="btn btn-sm btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                @can('delete', $chirp)
                <form method="POST" action="/chirps/{{ $chirp->id }}" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-ghost text-error" onclick="return confirm('Are you sure you want to delete this chirp?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
                @endcan
            </div>
            @endcan
        </div>
        <p>{{ $chirp->message }}</p>
        <div class="card-actions justify-end">
            <span class="text-sm text-gray-500">
                {{ $chirp->created_at->diffForHumans() }}
                @if ($chirp->updated_at && $chirp->updated_at->diffInSeconds($chirp->created_at) > 5)
                    <span class="text-xs italic">(edited)</span>
                @endif
            </span>
        </div>
    </div>
</div>
