<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WhatsappPdf extends Component
{
    use WithFileUploads;

    public $phone;
    public $pdf;
    public $status;

    protected $rules = [
        'phone' => 'required|string',
        'pdf' => 'required|file|mimes:pdf|max:10240',
    ];

    public function sendPdf()
    {
        $this->validate();

        try {
            $url = config('services.evolution_api.url');
            $apiKey = config('services.evolution_api.api_key');
            $instance = config('services.evolution_api.instance');

            $filename = $this->pdf->getClientOriginalName();
            $path = $this->pdf->store('whatsapp-pdf', 'public');
            $fileUrl = asset(Storage::url($path));

            $content = base64_encode(file_get_contents($this->pdf->getRealPath()));

            $sendAttempts = [
                [
                    'endpoint' => "{$url}/message/sendMedia/{$instance}",
                    'payload' => [
                        'number' => $this->phone,
                        'mediatype' => 'document',
                        'mimetype' => 'application/pdf',
                        'caption' => 'Documento em PDF',
                        'media' => $fileUrl,
                        'fileName' => $filename,
                    ],
                ],
                [
                    'endpoint' => "{$url}/message/sendMedia/{$instance}",
                    'payload' => [
                        'number' => $this->phone,
                        'mediatype' => 'document',
                        'mimetype' => 'application/pdf',
                        'caption' => 'Documento em PDF',
                        'media' => $content,
                        'fileName' => $filename,
                    ],
                ],
                [
                    'endpoint' => "{$url}/message/sendMedia/{$instance}",
                    'payload' => [
                        'number' => $this->phone,
                        'mediatype' => 'document',
                        'mimetype' => 'application/pdf',
                        'caption' => 'Documento em PDF',
                        'media' => "data:application/pdf;base64,{$content}",
                        'fileName' => $filename,
                    ],
                ],
            ];

            $lastError = null;
            foreach ($sendAttempts as $attempt) {
                $response = Http::withHeaders([
                    'apikey' => $apiKey,
                    'Content-Type' => 'application/json',
                ])->post($attempt['endpoint'], $attempt['payload']);

                if ($response->successful()) {
                    $this->status = 'PDF enviado com sucesso!';
                    $this->reset(['phone', 'pdf']);
                    return;
                }

                $lastError = $response;
            }

            $this->status = 'Erro persistente no envio de PDF: ' . ($lastError ? $lastError->status() . ' - ' . $lastError->body() : 'sem resposta');
            return;
        } catch (\Exception $e) {
            $this->status = 'Erro ao enviar PDF: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.whatsapp-pdf');
    }
}
