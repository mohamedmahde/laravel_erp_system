<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin_panel_settingsController_Request extends FormRequest
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
            'system_name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'system_name.required' => 'اسم الشركة مطلوب',
            'address.required' => 'العنوان  مطلوب',
            'phone.required' => 'رقم العاتف  مطلوب'
        ];
    }
}
