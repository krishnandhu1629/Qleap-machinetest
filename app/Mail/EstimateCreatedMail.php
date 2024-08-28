<?php



namespace App\Mail;

use App\Models\estimate;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class estimateCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $estimate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(estimate $estimate)
    {
        $this->estimate = $estimate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New estimate Created')
                    ->view('emails.estimate_created');
    }
}

