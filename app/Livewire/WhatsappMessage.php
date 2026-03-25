<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class WhatsappMessage extends Component
{
    public $phone;
    public $message;
    public $status;

    public function send()
    {
        $this->validate([
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            $url = config('services.evolution_api.url');
            $apiKey = config('services.evolution_api.api_key');
            $instance = config('services.evolution_api.instance');

            $response = Http::withHeaders([
                'apikey' => $apiKey,
                'Content-Type' => 'application/json',
            ])->post("{$url}/message/sendText/{$instance}", [
                'number' => $this->phone,
                'text' => $this->message,
            ]);

            if ($response->successful()) {
                $this->status = 'Mensagem enviada com sucesso!';
                $this->reset(['phone', 'message']);
            } else {
                $this->status = 'Erro ao enviar mensagem: ' . $response->body();
            }
        } catch (\Exception $e) {
            $this->status = 'Erro ao enviar mensagem: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.whatsapp-message');
    }
}
