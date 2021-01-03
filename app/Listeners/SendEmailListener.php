<?php

namespace App\Listeners;

use App\Events\CommentPostedEvent;
use App\Mail\NotifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CommentPostedEvent $event)
    {
        //dd($event);
        //Mail::to($event->comment->post()->user->email)->send(new NotifyEmail());
    }
}
