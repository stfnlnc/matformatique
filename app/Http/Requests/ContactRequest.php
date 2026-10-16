<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['nullable', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'email'   => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
            'cf-turnstile-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    $response = Http::asForm()->post(
                        'https://challenges.cloudflare.com/turnstile/v0/siteverify',
                        [
                            'secret'   => config('services.turnstile.secret_key'),
                            'response' => $value,
                            'remoteip' => $this->ip(),
                        ]
                    );

                    if (! $response->json('success')) {
                        $fail('La vérification anti-robot a échoué. Veuillez réessayer.');
                    }
                },
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'cf-turnstile-response.required' => 'Veuillez valider la vérification anti-robot.',
        ];
    }
}
