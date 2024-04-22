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
    protected $emaildata, $templateid, $subjectData, $user_name;
    // protected $recipientEmail, $templateid, $subjectData, $user_name;
    /**
     * Create a new job instance.
     */
    public function __construct($emaildata, $id, $subjectData)
    {
        $this->subjectData = $subjectData;
        $this->emaildata = $emaildata;
        // $this->$user_name = $user_name;
        $this->templateid = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $templateData = template::find($this->templateid);
        // dd($this->user_name);
        Mail::to($this->emaildata['email'])->send(new webmail($templateData, $this->emaildata['name'], $this->subjectData));
    }
}
