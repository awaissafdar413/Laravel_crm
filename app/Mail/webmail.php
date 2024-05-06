<?php

namespace App\Mail;

use App\Models\template;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class webmail extends Mailable
{
    use Queueable, SerializesModels;

    public $templateData , $subjectData ,$username;

    public function __construct($templateData ,$username, $subjectData )
    {
        $this->username = $username;
        $this->templateData = $templateData;
        $this->subjectData = $subjectData;

    }
    public function build()
    {
        // dd(public_path($this->subjectData['attachment']));
        return $this->view('template.email')->with([
            'templateData' => $this->templateData,
            'userName' => $this->username,
          ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subjectData['subject'],
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
        if($this->subjectData['attachment'] != " ")
        {
        return [
            Attachment::fromPath( Public_path( $this->subjectData['attachment']))
            ->as('Muhammad_Awais.pdf')
            ->withMime('application/pdf'),
        ];
    }
    else{
        return[
            //
            dd($this->subjectData['attachment'])
        ];
    }
    }
}
