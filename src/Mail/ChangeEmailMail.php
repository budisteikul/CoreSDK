<?php

namespace budisteikul\coresdk\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use budisteikul\coresdk\Models\User;
use Illuminate\Support\Facades\URL;

class ChangeEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$new_email,$id)
    {
        $this->new_email = $new_email;
		$this->user = User::find($id);
		$this->action_url = route('route_coresdk_account.index',[ 'id' => $id, 'setting' => 'verification', 'token' => $token ]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		
        return $this->view('coresdk::layouts.mail.change-email')
                    ->text('coresdk::layouts.mail.change-email_plain')
				    ->to($this->new_email)
				    ->subject('Change Email Confirmation')
				    ->with('action_url',$this->action_url)
					->with('name',$this->user->name);
    }
}
