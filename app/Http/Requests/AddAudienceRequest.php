<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAudienceRequest extends FormRequest
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
            'name' => 'required',
            'state' => 'sometimes|list|max:255',
            'category' => 'required|list|max:100',
            'segment' => 'sometimes|list|max:100',
            'city' => 'sometimes|list|max:255',
            'product_type' => 'sometimes|list',
            'SAP_Code' => 'sometimes'
        ];
    }
}
