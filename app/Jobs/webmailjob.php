<?php

namespace App\Jobs;

use App\Mail\webmail;
use App\Models\template;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class webmailjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $recipientEmail , $templateid , $subjectData;
    /**
     * Create a new job instance.
     */
    public function __construct($email,$id,$subjectData)
    {
        $this->subjectData = $subjectData;
        $this->recipientEmail=$email;
        $this->templateid=$id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $templateData = template::find($this->templateid);
        Mail::to($this->recipientEmail )->send(new webmail($templateData , $this->subjectData));
    }
}
