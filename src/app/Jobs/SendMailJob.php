<?php

namespace App\Jobs;

use App\Mail\SendGridMail;
use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $destinatario;
    private Email $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Email $email, string $destinatario)
    {
        $this->email = $email;
        $this->destinatario = $destinatario;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->destinatario)
            ->send(new SendGridMail($this->email, $this->destinatario));
    }
}
