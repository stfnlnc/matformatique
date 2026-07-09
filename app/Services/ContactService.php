<?php

namespace App\Services;

use App\Mail\ContactMailable;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public function handleContactSubmission(Contact $contact): void
    {
        Mail::to('stefan.lancelot@ik.me')->send(new ContactMailable($contact));
    }
}
