<div>
    <h3>Enviar PDF WhatsApp via Evolution API</h3>

    @if($status)
        <div class="alert alert-info">{{ $status }}</div>
    @endif

    <form wire:submit.prevent="sendPdf" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="phone" class="form-label">Número do Telefone (com código do país, ex: 5511999999999)</label>
            <input type="text" class="form-control" id="phone" wire:model="phone" placeholder="5511999999999">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="pdf" class="form-label">Arquivo PDF</label>
            <input type="file" class="form-control" id="pdf" wire:model="pdf" accept="application/pdf">
            @error('pdf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar PDF</button>
    </form>

    <div class="mt-2">
        <small class="text-muted">Máximo 10MB e apenas PDF.</small>
    </div>
</div>
