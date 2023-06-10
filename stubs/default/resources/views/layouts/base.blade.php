<!DOCTYPE html>
<html
    x-data="{
        systemTheme: window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light',
        userTheme: $persist(null).as('userTheme'),
        get theme() {
            return this.userTheme || this.systemTheme;
        },
    }"
    x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        systemTheme = event.matches ? 'dark' : 'light';
    });"
    x-bind:data-theme="theme"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

<head>
    {{-- This prevents the page from flickering when loading the user's theme because of the delay of Alpine being loaded. --}}
    <script>
        document.getElementsByTagName('html')[0].dataset.theme = JSON.parse(localStorage.getItem('userTheme')) ||
            (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    </script>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link
        href="{{ url(asset('favicon.ico')) }}"
        rel="shortcut icon"
    >

    <!-- Fonts -->
    <link
        href="https://rsms.me/inter/inter.css"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
</head>

<body>
    @yield('body')
    <div class="fixed bottom-4 right-4">
        <x-theme-selector class="dropdown-top dropdown-end" />
    </div>
</body>

</html>
