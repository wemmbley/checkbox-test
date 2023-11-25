<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookEditRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'int'],
            'name' => ['required', 'string', 'max:255'],
            'short_description' => ['string', 'max:255'],
            'image' => ['string', 'max:255'],
            'publication_date' => ['date'],
        ];
    }
}
