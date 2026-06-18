<?php

namespace App\Services;

use App\Mail\ContactMailable;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public function handleContactSubmission(Contact $contact): void
    {
        Mail::to('admin@votre-site.com')->send(new ContactMailable($contact));
    }
}
