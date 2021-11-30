<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')

        <!-- Page Content -->
        <div class="grid grid-cols-5 px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <aside>
                <h1 class="mb-4 text-lg font-bold">Importar Listas</h1>
                <ul class="text-sm text-gray-600">
                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('import.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('import.index') }}">Base de datos</a>
                    </li>

                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('import.honduras.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('import.honduras.index') }}">Base de datos (Honduras)</a>
                    </li>

                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('supplier.incremental.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('supplier.incremental.index') }}">Incremental</a>
                    </li>
                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('supplier.incremental.honduras.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('supplier.incremental.honduras.index') }}">Incremental (Honduras)</a>
                    </li>
                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('supplier.all.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('supplier.all.index') }}">Completa</a>
                    </li>
                    <li
                        class="pl-2 mb-1 leading-7 border-l-4 @routeIs('supplier.honduras.all.index')border-yellow-500 @else border-transparent @endif">
                        <a href="{{ route('supplier.honduras.all.index') }}">Completa (Honduras)</a>
                    </li>
                </ul>
            </aside>
            <div class="col-span-4 card">
                <main class="card-body">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @stack('scripts')
</body>

</html>
