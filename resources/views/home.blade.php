<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="hero min-h-[40vh]">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Welcome to Chirper!</h1>
                <p class="py-6">Share your thoughts with the world. Join our community and start chirping today!</p>
                <div class="flex gap-4 justify-center">
                    <a href="/register" class="btn btn-primary">Get Started</a>
                    <a href="/login" class="btn btn-outline">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Latest Chirps</h2>
        
        <!-- Create Chirp Form -->
        <div class="card bg-base-100 shadow-xl mb-6">
            <div class="card-body">
                <form method="POST" action="/chirps">
                    @csrf
                    <div class="form-control">
                        <textarea 
                            name="message" 
                            class="textarea textarea-bordered h-24 @error('message') textarea-error @enderror" 
                            placeholder="What's on your mind?"
                            required
                            maxlength="255">{{ old('message') }}</textarea>
                        @error('message')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <button type="submit" class="btn btn-primary">Chirp</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Chirps List -->
        <div class="space-y-4">
            @forelse ($chirps as $chirp)
                <x-chirp :chirp="$chirp" />
            @empty
            <div class="alert alert-info">
                <span>No chirps yet. Be the first to chirp!</span>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
