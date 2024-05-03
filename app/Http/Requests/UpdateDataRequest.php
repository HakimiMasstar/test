<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if(Auth::user()->is_admin !== 1) {
            return false;
        }
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
            'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'color' => ['required', 'string', 'regex:/^#[a-fA-F0-9]{6}$/'],
            'shape' => ['required', 'string', 'in:circle,square,triangle'],
        ];
    }
}
