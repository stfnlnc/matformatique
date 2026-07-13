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
            'g-recaptcha-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret'   => env('RECAPTCHA_SECRET_KEY'),
                        'response' => $value,
                        'remoteip' => $this->ip(),
                    ]);

                    if (!$response->json('success')) {
                        $fail('La vérification du reCAPTCHA a échoué. Veuillez réessayer.');
                    }
                },
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'g-recaptcha-response.required' => 'Veuillez cocher la case "Je ne suis pas un robot".',
        ];
    }
}
