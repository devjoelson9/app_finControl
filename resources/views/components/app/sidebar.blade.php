@php
    $links = [
        [
            'label' => __('Dashboard'),
            'href' => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'icon' => 'M3 13h8V3H3v10Zm0 8h8v-6H3v6Zm10 0h8V11h-8v10Zm0-18v6h8V3h-8Z',
        ],
        [
            'label' => __('Transactions / Records'),
            'href' => '#',
            'active' => false,
            'icon' => 'M4 7h16M4 12h16M4 17h16',
            'disabled' => true,
        ],
        [
            'label' => __('Reports'),
            'href' => '#',
            'active' => false,
            'icon' => 'M4 19h16M6 17V7m6 10V5m6 12V9',
            'disabled' => true,
        ],
        [
            'label' => __('Settings'),
            'href' => '#',
            'active' => false,
            'icon' => 'M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8-3a8 8 0 0 1-.12 1.35l2.03 1.58-2 3.46-2.4-.98a8.02 8.02 0 0 1-2.34 1.36L13.8 22h-3.6l-.36-2.23a8.02 8.02 0 0 1-2.34-1.36l-2.4.98-2-3.46 2.03-1.58A8 8 0 0 1 4 12c0-.46.04-.91.12-1.35L2.1 9.07l2-3.46 2.4.98A8.02 8.02 0 0 1 8.84 5.23L9.2 3h3.6l.36 2.23a8.02 8.02 0 0 1 2.34 1.36l2.4-.98 2 3.46-2.03 1.58A8 8 0 0 1 20 12Z',
            'disabled' => true,
        ],
    ];
@endphp

<aside class="w-full border-b border-slate-200 bg-white lg:border-b-0 lg:border-r lg:border-slate-200 h-full">
    <div class="p-5">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">
            {{ __('FinControl') }}
        </p>
    </div>

    <nav class="flex flex-col gap-1 px-3 pb-6">
        @foreach ($links as $link)
            @php
                $isDisabled = $link['disabled'] ?? false;
                $isActive = $link['active'] ?? false;
            @endphp
            <a
                href="{{ $link['href'] }}"
                @if ($isDisabled) aria-disabled="true" @endif
                @if ($isActive) aria-current="page" @endif
                class="{{ $isActive ? 'bg-slate-900 text-white' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }} {{ $isDisabled ? 'cursor-not-allowed opacity-60' : '' }} flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium transition"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="{{ $link['icon'] }}" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>{{ $link['label'] }}</span>
            </a>
        @endforeach
    </nav>
</aside>
