<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Sign In</h1>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form method="POST" action="/login">
                    @csrf

                    <div class="form-control">
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
                        <label class="label cursor-pointer justify-start gap-2">
                            <input type="checkbox" name="remember" class="checkbox checkbox-sm">
                            <span class="label-text">Remember me</span>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>

                    <div class="text-center mt-4">
                        <span class="text-sm">Don't have an account? </span>
                        <a href="{{ route('register') }}" class="text-sm link link-primary">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
