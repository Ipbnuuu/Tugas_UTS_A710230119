<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl">Chirper</a>
        </div>
        <div class="flex-none">
            @auth
            <ul class="menu menu-horizontal px-1">
                <li><span class="font-semibold">{{ auth()->user()->name }}</span></li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
            @else
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
            @endauth
        </div>
    </div>

    @if (session('success'))
    <div class="toast toast-top toast-center z-50">
        <div class="alert alert-success animate-fade-out">
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-4 bg-base-300 text-base-content mt-8">
        <aside>
            <p>Copyright © 2026 - Chirper</p>
        </aside>
    </footer>

    <style>
        @keyframes fade-out {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
        
        .animate-fade-out {
            animation: fade-out 3s ease-out forwards;
        }
    </style>
</body>
</html>
