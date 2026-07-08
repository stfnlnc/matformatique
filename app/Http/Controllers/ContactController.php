<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactRequest $request, ContactService $contactService): RedirectResponse
    {
        $cleanData = $request->validated();

        $contact = new Contact($cleanData);
        // $contact->save();

        $contactService->handleContactSubmission($contact);

        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}
