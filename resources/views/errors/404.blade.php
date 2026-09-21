@extends('layouts.app')

@section('title', '404 — Page Not Found | Anshivya Group')

@section('content')
    <section class="pt-40 pb-32 bg-slate-950 flex items-center justify-center min-h-[70vh]">
        <div class="text-center space-y-6 max-w-md mx-auto px-4">
            <h1 class="text-6xl font-black text-amber-400">404</h1>
            <h2 class="text-2xl font-bold text-white">Page Not Found</h2>
            <p class="text-slate-400 text-sm">The page you are looking for does not exist or may have been moved.</p>
            <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-xs uppercase tracking-wider">
                Return to Homepage
            </a>
        </div>
    </section>
@endsection
