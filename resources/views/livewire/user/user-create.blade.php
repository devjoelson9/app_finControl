<div class="mx-auto max-w-2xl">
    <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-2xl backdrop-blur">
        <div class="mb-5 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-white">Criar Usuário</h1>
            <a href="{{ route('users.index') }}" class="rounded-lg bg-slate-800 px-3 py-2 text-sm text-slate-100 hover:bg-slate-700">Voltar</a>
        </div>

        @if (session()->has('success'))
            <div class="mb-4 rounded-lg border border-emerald-400/30 bg-emerald-500/10 p-3 text-sm text-emerald-200">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label class="mb-1 block text-sm font-medium text-slate-200">Nome</label>
                <input wire:model.defer="name" type="text" class="w-full rounded-lg border border-white/20 bg-slate-900/70 px-3 py-2 text-sm text-white outline-none focus:border-cyan-300 focus:ring-2 focus:ring-cyan-500/30" />
                @error('name') <div class="mt-1 text-xs text-rose-300">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-slate-200">Email</label>
                <input wire:model.defer="email" type="email" class="w-full rounded-lg border border-white/20 bg-slate-900/70 px-3 py-2 text-sm text-white outline-none focus:border-cyan-300 focus:ring-2 focus:ring-cyan-500/30" />
                @error('email') <div class="mt-1 text-xs text-rose-300">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-slate-200">Senha</label>
                <input wire:model.defer="password" type="password" class="w-full rounded-lg border border-white/20 bg-slate-900/70 px-3 py-2 text-sm text-white outline-none focus:border-cyan-300 focus:ring-2 focus:ring-cyan-500/30" />
                @error('password') <div class="mt-1 text-xs text-rose-300">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-slate-200">Confirmar Senha</label>
                <input wire:model.defer="password_confirmation" type="password" class="w-full rounded-lg border border-white/20 bg-slate-900/70 px-3 py-2 text-sm text-white outline-none focus:border-cyan-300 focus:ring-2 focus:ring-cyan-500/30" />
            </div>

            <button type="submit" class="w-full rounded-lg bg-gradient-to-r from-cyan-400 to-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-lg hover:opacity-90">Salvar usuário</button>
        </form>
    </div>
</div>
