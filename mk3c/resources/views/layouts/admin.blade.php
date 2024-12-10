<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @livewireStyles
    @filamentStyles
</head>
<body class="filament-body bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-white shadow border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('filament.pages.dashboard') }}" class="text-lg font-bold">
                            Admin Panel
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex items-center space-x-8">
                        @foreach (\Filament\Facades\Filament::getNavigation() as $group)
                            @foreach ($group->items as $item)
                                <a href="{{ $item->url }}"
                                   class="{{ request()->url() === $item->url ? 'font-bold text-blue-600' : 'text-gray-600' }}">
                                    {{ $item->label }}
                                </a>
                            @endforeach
                        @endforeach
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center">
                        <x-filament::user-menu />
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 py-6">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    @filamentScripts
</body>
</html>
