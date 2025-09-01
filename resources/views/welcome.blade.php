@extends('layouts.app')
@section('content')
<div class="mx-auto max-w-6xl">
    <!-- Hero -->
    <section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-usjr-green via-usjr-deep to-usjr-green text-white">
        <div class="absolute -right-10 -top-10 h-56 w-56 rounded-full bg-usjr-gold/20 blur-2xl"></div>
        <div class="absolute -bottom-12 -left-12 h-72 w-72 rounded-full bg-usjr-gold/30 blur-3xl"></div>
        <div class="relative px-6 py-12 md:px-10 md:py-16">
            <h1 class="text-3xl font-semibold leading-tight tracking-tight md:text-4xl">Quality Christian, Community‑Oriented Education</h1>
            <p class="mt-3 max-w-3xl text-usjr-cream">Excellence in education grounded in Recollect values. Students thrive in a dynamic environment that fosters innovation, leadership, and holistic growth—supported by modern facilities, expert faculty, and diverse opportunities.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('products.index') }}" class="rounded-md bg-usjr-gold px-4 py-2 text-sm font-medium text-usjr-deep hover:bg-usjr-gold-dark">Explore Products</a>
                <a href="https://www.usjr.edu.ph/" target="_blank" rel="noopener" class="rounded-md bg-white/10 px-4 py-2 text-sm font-medium text-white ring-1 ring-inset ring-white/30 hover:bg-white/20">Visit USJ-R</a>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="mt-10 grid gap-6 md:grid-cols-2">
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold tracking-tight text-usjr-green">Vision</h2>
            <p class="mt-2 text-slate-600">A Recoletos University renowned for Education Excellence, Research Impact, and Community Transformation.</p>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold tracking-tight text-usjr-green">Mission</h2>
            <p class="mt-2 text-slate-600">Imbued with the spirit of “Caritas et Scientia,” we provide the highest level of Quality Christian Community‑oriented Education.</p>
        </div>
    </section>

    <!-- Core Values -->
    <section class="mt-10">
        <h2 class="text-lg font-semibold tracking-tight text-usjr-green">Core Values</h2>
        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @php
                $values = [
                    ['Interiority','Cultivating reflective growth and depth of character.'],
                    ['Nationalism','Serving the nation with competence and compassion.'],
                    ['Service','Uplifting communities through action and stewardship.'],
                    ['Pioneerism','Driving innovation and embracing positive change.'],
                    ['Integrity','Doing what is right with consistency and courage.'],
                    ['Reliability','Being dependable in commitment and excellence.'],
                    ['Excellence','Pursuing the highest standards in all endeavors.'],
                ];
            @endphp
            @foreach($values as [$title, $desc])
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-usjr-green/10 text-usjr-green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path d="M10.788 3.21c-.35-1.123-1.924-1.123-2.273 0l-.631 2.027a1.21 1.21 0 01-1.152.86H4.59c-1.178 0-1.665 1.51-.715 2.205l1.64 1.19c.41.297.58.83.42 1.31l-.63 2.027c-.35 1.123.922 2.057 1.873 1.362l1.64-1.19a1.21 1.21 0 011.42 0l1.64 1.19c.951.695 2.223-.239 1.873-1.362l-.63-2.027a1.21 1.21 0 01.42-1.31l1.64-1.19c.95-.695.463-2.205-.715-2.205h-2.142a1.21 1.21 0 01-1.152-.86l-.631-2.027z"/></svg>
                    </div>
                    <h3 class="mt-3 text-base font-medium">{{ $title }}</h3>
                    <p class="mt-1 text-sm text-slate-600">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Programs & Centers of Excellence / Development -->
    <section class="mt-10">
        <h2 class="text-lg font-semibold tracking-tight text-usjr-green">Academic Programs & Achievements</h2>
        <p class="mt-2 text-slate-600">Recognized Centers of Excellence and Development that empower future leaders.</p>
        <div class="mt-4 flex flex-wrap gap-2">
            @php
                $programs = [
                    'Accountancy (COE)',
                    'Business Administration (COE)',
                    'Industrial Engineering (COD)',
                    'Teacher Education (COE)',
                    'Information Technology (COD)'
                ];
            @endphp
            @foreach($programs as $p)
                <span class="inline-flex items-center rounded-full bg-usjr-gold/15 px-3 py-1 text-sm font-medium text-usjr-deep ring-1 ring-inset ring-usjr-gold/40">{{ $p }}</span>
            @endforeach
        </div>
        <div class="mt-6 grid gap-6 md:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-base font-medium text-usjr-green">Thriving Community</h3>
                <p class="mt-1 text-sm text-slate-600">Vibrant organizations, leadership formation, and service‑learning engagements.</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-base font-medium text-usjr-green">Innovation & Research</h3>
                <p class="mt-1 text-sm text-slate-600">Labs and initiatives that translate ideas into impact for communities.</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-base font-medium text-usjr-green">Holistic Growth</h3>
                <p class="mt-1 text-sm text-slate-600">Formation programs nurturing faith, character, and professional excellence.</p>
            </div>
        </div>
    </section>

    <!-- History -->
    <section class="mt-10">
        <h2 class="text-lg font-semibold tracking-tight text-usjr-green">USJ‑R Heritage</h2>
        <div class="mt-4 grid gap-4 md:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="text-sm font-medium text-usjr-green">1947</div>
                <p class="mt-1 text-sm text-slate-600">Established as a Recollect institution, rooted in “Caritas et Scientia.”</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="text-sm font-medium text-usjr-green">1984</div>
                <p class="mt-1 text-sm text-slate-600">Granted University status, expanding academic reach and impact.</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="text-sm font-medium text-usjr-green">2001</div>
                <p class="mt-1 text-sm text-slate-600">CHED Autonomous Status, affirming quality and continuous excellence.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="mt-12">
        <div class="rounded-2xl border border-usjr-gold/40 bg-usjr-gold/15 p-6 text-usjr-deep">
            <div class="flex flex-col items-start justify-between gap-4 md:flex-row md:items-center">
                <div>
                    <h3 class="text-base font-semibold tracking-tight">Begin your USJ‑R journey</h3>
                    <p class="mt-1 text-sm text-slate-700">Discover programs, explore opportunities, and thrive in a community of excellence.</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('products.index') }}" class="rounded-md bg-usjr-green px-4 py-2 text-sm font-medium text-white hover:bg-usjr-deep">Browse Products</a>
                    <a href="https://www.usjr.edu.ph/" target="_blank" rel="noopener" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-usjr-deep ring-1 ring-inset ring-usjr-gold/40 hover:bg-usjr-gold/10">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
