<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $id = $this->route('id');

        return [
            'image'     => ($id ? 'nullable' : 'required') . '|image|mimes:jpg,jpeg,png,webp|max:2048',

            'name'      => 'required|string|max:255',
            'name_ar'   => 'required|string|max:255',

            'notes'     => 'required|string',
            'notes_ar'  => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'الصورة مطلوبة',
            'image.max'             => 'الحجم المسموح به للصورة يجب ان لا يتعدي 2 ميجا',
            'image.mimes'           => 'الصور المقبولة يجب ان تكون jpg, jpeg, png, webp.',
            'name.required'     => 'الاسم بالإنجليزية مطلوب',
            'name_ar.required'  => 'الاسم بالعربية مطلوب',
            'notes.required'    => 'الوصف بالإنجليزية مطلوب',
            'notes_ar.required' => 'الوصف بالعربية مطلوب',

        ];
    }
}
