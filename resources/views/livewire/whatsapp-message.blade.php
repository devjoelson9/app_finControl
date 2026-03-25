<div>
    <h3>Enviar Mensagem WhatsApp via Evolution API</h3>

    @if($status)
        <div class="alert alert-info">{{ $status }}</div>
    @endif

    <form wire:submit.prevent="send">
        <div class="mb-3">
            <label for="phone" class="form-label">Número do Telefone (com código do país, ex: 5511999999999)</label>
            <input type="text" class="form-control" id="phone" wire:model="phone" placeholder="5511999999999">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Mensagem</label>
            <textarea class="form-control" id="message" wire:model="message" rows="3" placeholder="Digite sua mensagem"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
</div>