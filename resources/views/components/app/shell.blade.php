<div class="min-h-screen bg-slate-50 text-slate-900 grid grid-rows-[auto,1fr,auto]">
    <x-app.navbar />

    <div class="grid grid-cols-1 lg:grid-cols-[16rem,1fr] min-h-0">
        <x-app.sidebar />

        <div class="flex flex-col min-h-0">
            @if (isset($header))
                <header class="border-b border-slate-200 bg-white">
                    <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main class="max-w-7xl mx-auto w-full px-4 py-8 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
        </div>
    </div>

    <x-app.footer />
</div>
