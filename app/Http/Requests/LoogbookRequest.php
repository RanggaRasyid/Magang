<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoogbookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255', 'min:10'],
            
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'title name must be filled',
            'deskripsi.required' => 'The description must be filled',
        ];
    }
}
