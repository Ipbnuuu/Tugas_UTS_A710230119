<x-layout>
    <x-slot:title>Edit Chirp</x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Chirp</h1>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form method="POST" action="/chirps/{{ $chirp->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                        <textarea 
                            name="message" 
                            class="textarea textarea-bordered h-24 @error('message') textarea-error @enderror" 
                            placeholder="What's on your mind?"
                            required
                            maxlength="255">{{ old('message', $chirp->message) }}</textarea>
                        @error('message')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="card-actions justify-end mt-4 gap-2">
                        <a href="/" class="btn btn-ghost">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Chirp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
