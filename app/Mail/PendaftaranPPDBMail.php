<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PendaftaranPPDBMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $type; // 'admin' or 'pendaftar'

    /**
     * Create a new message instance.
     */
    public function __construct($data, $type = 'pendaftar')
    {
        $this->data = $data;
        $this->type = $type;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->type === 'admin' 
            ? 'Pendaftaran PPDB Baru: ' . ($this->data['nama_lengkap'] ?? 'Calon Siswa')
            : 'Konfirmasi Pendaftaran PPDB SMK Nasional Nganjuk';

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.pendaftaran-ppdb',
        );
    }
}