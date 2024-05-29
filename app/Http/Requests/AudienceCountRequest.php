<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudienceCountRequest extends FormRequest
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
        return [
            'name' => 'sometimes',
            'state' => 'sometimes|array|max:255',
            'category' => 'required|array|max:100',
            'segment' => 'sometimes|array|max:100',
            'city' => 'sometimes|array|max:255',
            'product_type' => 'sometimes|array',
            'SAP_Code' => 'sometimes'
        ];
    }
}
