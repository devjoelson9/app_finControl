<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="bg-slate-900 text-slate-100 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4 py-4 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3" wire:navigate>
                    <x-application-logo class="h-8 w-auto" />
                    <span class="text-lg font-semibold tracking-wide text-white">
                        {{ config('app.name', 'FinControl') }}
                    </span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <div class="text-sm text-slate-200">
                    {{ auth()->user()->name }}
                </div>
                <button
                    wire:click="logout"
                    class="inline-flex items-center rounded-md bg-slate-800 px-4 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-slate-700 hover:bg-slate-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-slate-400"
                    wire:loading.attr="disabled"
                    wire:target="logout"
                    type="button"
                >
                    <span wire:loading.remove wire:target="logout">{{ __('Log Out') }}</span>
                    <span wire:loading wire:target="logout">{{ __('Signing out...') }}</span>
                </button>
            </div>
        </div>
    </div>
</nav>
