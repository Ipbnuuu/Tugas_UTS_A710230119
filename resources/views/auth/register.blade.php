<x-layout>
    <x-slot:title>Register</x-slot:title>

    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Create an Account</h1>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form method="POST" action="/register">
                    @csrf
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            class="input input-bordered @error('name') input-error @enderror" 
                            value="{{ old('name') }}"
                            required>
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            class="input input-bordered @error('email') input-error @enderror" 
                            value="{{ old('email') }}"
                            required>
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            class="input input-bordered @error('password') input-error @enderror" 
                            required>
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            class="input input-bordered" 
                            required>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                    <div class="text-center mt-4">
                        <span class="text-sm">Already have an account? </span>
                        <a href="/login" class="text-sm link link-primary">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
