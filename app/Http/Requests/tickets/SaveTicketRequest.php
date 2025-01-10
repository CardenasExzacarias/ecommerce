<?php

namespace App\Http\Requests\tickets;

use Illuminate\Foundation\Http\FormRequest;

class SaveTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $data = $this->all();

        $rules = [];

        unset($data['_token']);

        foreach ($data as $key => $value) {
            $rules[$key] = ['numeric', 'min:1', 'required'];
        }

        return $rules;
    }
}
