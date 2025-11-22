<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'image' => [
                $id ? 'nullable' : 'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'name_ar' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'صورة القسم مطلوبة.',
            'image.image' => 'يجب رفع صورة صحيحة.',
            'image.mimes' => 'يُسمح فقط بصور JPG, JPEG, PNG, WEBP.',
            'image.max' => 'حجم الصورة لا يجب أن يتخطى 2 ميجابايت.',

            'name_ar.required' => 'اسم القسم بالعربية مطلوب.',
            'name_en.required' => 'اسم القسم بالإنجليزية مطلوب.',

            'name_ar.string' => 'اسم القسم بالعربية يجب أن يكون نصًا.',
            'name.string' => 'اسم القسم بالإنجليزية يجب أن يكون نصًا.',

            'name_ar.max' => 'الاسم العربي طويل جدًا.',
            'name.max' => 'الاسم الإنجليزي طويل جدًا.',
        ];
    }
}
