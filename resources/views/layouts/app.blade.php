<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 11 CRUD Application Tutorial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'usjr-green': '#0f3b2e',
                        'usjr-deep': '#0a2a20',
                        'usjr-gold': '#e8a90c',
                        'usjr-gold-dark': '#c58f08',
                        'usjr-cream': '#fff7e6',
                    },
                    fontFamily: {
                        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-dvh bg-gradient-to-br from-usjr-cream to-slate-100 text-slate-800">
    <div class="relative isolate">
        <div class="h-6 w-full bg-usjr-green"></div>
        <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 overflow-hidden">
            <svg class="mx-auto h-64 w-[64rem] blur-2xl opacity-20" viewBox="0 0 1108 632" aria-hidden="true">
                <defs>
                    <linearGradient id="g" x1="50%" x2="50%" y1="0%" y2="100%">
                        <stop offset="0%" stop-color="#e8a90c" />
                        <stop offset="100%" stop-color="#0f3b2e" />
                    </linearGradient>
                </defs>
                <path fill="url(#g)" d="M0 0h1108v632H0z" />
            </svg>
        </div>
        <header class="sticky top-0 z-20 border-b border-usjr-gold bg-usjr-gold text-usjr-deep">
            <div class="mx-auto max-w-6xl px-4 py-4 flex items-center justify-between">
                <a href="{{ url('/') }}" class="font-semibold tracking-tight text-usjr-deep text-lg">USJ-R CRUD</a>
                <nav class="flex items-center gap-1">
                    <a href="{{ route('products.index') }}" class="rounded-md px-3 py-1.5 text-sm font-medium hover:bg-usjr-gold-dark/20">Products</a>
                    <a href="https://www.usjr.edu.ph/" target="_blank" rel="noopener" class="rounded-md px-3 py-1.5 text-sm font-medium hover:bg-usjr-gold-dark/20">USJ-R</a>
                </nav>
            </div>
        </header>
        <main class="mx-auto max-w-6xl px-4 py-8">
            <h1 class="text-2xl font-semibold tracking-tight text-usjr-deep">Simple Laravel 11 CRUD Application Tutorial</h1>
            <div class="mt-6">
                @yield('content')
            </div>
        </main>
        <footer class="border-t border-slate-200/60">
            <div class="mx-auto max-w-6xl px-4 py-6 text-center text-sm text-slate-600">
                Return to Website: <a href="https://www.usjr.edu.ph/" class="font-semibold text-usjr-green hover:text-usjr-deep" target="_blank" rel="noopener">University of San Jose - Recoletos</a>
            </div>
        </footer>
    </div>
</body>
</html> 