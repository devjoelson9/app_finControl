
<div class="mx-auto max-w-7xl">
        <div class="mb-6 flex flex-col gap-4 rounded-2xl border border-white/10 bg-white/5 p-6 shadow-2xl backdrop-blur">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-white">Usuários</h1>
                    <p class="text-sm text-slate-300">Gerencie sua base de usuários com visual moderno e filtragem instantânea.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="rounded-full bg-indigo-500/20 px-3 py-1 text-sm font-semibold text-indigo-100">Total: {{ $users->total() }}</span>
                    <a href="{{ route('users.create') }}" class="rounded-lg bg-gradient-to-r from-cyan-400 to-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-cyan-500/30 transition hover:opacity-90">+ Novo Usuário</a>
                </div>
            </div>

            <div class="flex w-full items-center gap-2">
                <input
                    type="text"
                    wire:model.debounce.300ms="search"
                    placeholder="Buscar por nome ou email..."
                    class="w-full rounded-xl border border-white/20 bg-slate-900/60 px-4 py-2 text-sm text-white placeholder:text-slate-400 outline-none transition focus:border-indigo-300 focus:ring-2 focus:ring-indigo-500/30"
                />
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-white/10 bg-white/5 shadow-2xl backdrop-blur">
            <table class="min-w-full divide-y divide-white/10 text-left text-sm">
                <thead class="bg-indigo-600/25 text-indigo-100">
                    <tr>
                        <th class="px-6 py-3 font-semibold uppercase tracking-wider">Nome</th>
                        <th class="px-6 py-3 font-semibold uppercase tracking-wider">Email</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse($users as $user)
                        <tr class="bg-slate-800/25 hover:bg-slate-700/30">
                            <td class="px-6 py-4">
                                <div class="font-medium text-white">{{ $user->name }}</div>
                            </td>
                            <td class="px-6 py-4 text-slate-200">{{ $user->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-16 text-center text-slate-300">
                                Nenhum usuário encontrado. Ajuste a busca ou adicione novos usuários.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex justify-end text-sm text-slate-300">
            {{ $users->links() }}
        </div>
    </div>

