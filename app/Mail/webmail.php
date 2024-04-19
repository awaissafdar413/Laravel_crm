<?php

namespace App\Mail;

use App\Models\template;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class webmail extends Mailable
{
    use Queueable, SerializesModels;

    public $templateData;

    public function __construct($templateData)
    {
        $this->templateData = $templateData;
    }

    public function build()
    {
        return $this->view('template.email')->with('templateData', $this->templateData);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:'MA Tech Solutions BPO: Your One-Stop Shop for Business Growth
            ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'template.email',
        //     $datas=template::where('id',1)->get(),
        //   dd(  $datas)
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
