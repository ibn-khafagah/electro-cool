<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'name_ar'   => 'required|string|max:255',

            'notes'     => 'required|string',
            'notes_ar'  => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // English name
            'name.required' => 'The English name field is required.',
            'name.string'   => 'The English name must be a valid string.',
            'name.max'      => 'The English name cannot exceed 255 characters.',

            // Arabic name
            'name_ar.required' => 'حقل الاسم بالعربية مطلوب.',
            'name_ar.string'   => 'الاسم بالعربية يجب أن يكون نصًا صحيحًا.',
            'name_ar.max'      => 'الاسم بالعربية لا يمكن أن يزيد عن 255 حرفًا.',

            // English notes
            'notes.required' => 'The English notes field is required.',
            'notes.string'   => 'The English notes must be valid text.',

            // Arabic notes
            'notes_ar.required' => 'حقل الملاحظات بالعربية مطلوب.',
            'notes_ar.string'   => 'الملاحظات بالعربية يجب أن تكون نصًا صالحًا.',
        ];
    }
}
