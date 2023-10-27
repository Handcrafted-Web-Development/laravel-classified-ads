<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
            'title' => ["required", "string"],
            'brand' => ["required", "string"],
            'price' => ["required", "decimal:2"],
            'year' => ["required", "integer"],
            'size' => ["required", 'string'],
//            'category_name' => ["required", 'string'],
//            'delivery_name' => ["required", 'string'],
            'description' => ["required", "string"],
            'guarantee' => ["required", "string"],
            'due_date' => ["required", "date"],
        ];
    }
}
