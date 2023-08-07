<?php

namespace App\Http\Requests;

use App\Rules\validLink;
use Illuminate\Foundation\Http\FormRequest;

class shortReuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'link' => ['required', 'string', new validLink],
            'name' => ['nullable', 'string', 'max:10'],
        ];
    }
}
