<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AgradecimientoCompraMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $nombre, $apellido, $telefono, $email, $totalGeneral;
    public array $productos; 

    /**
     * Create a new message instance.
     */
    public function __construct($nombre, $apellido, $telefono, $email, $productos, $totalGeneral)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->productos = $productos;
        $this->totalGeneral = $totalGeneral;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: 'romerosebastian781@gmail.com',
            subject: 'Compra Finalizada - Campify',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.agradecimientoCompra',
            with: [
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'telefono' => $this->telefono,
                'email' => $this->email,
                'productos' => $this->productos,
                'totalGeneral' => $this->totalGeneral,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
