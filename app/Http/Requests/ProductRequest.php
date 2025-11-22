<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'front_image' => [
                $id ? 'nullable' : 'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            'category_id' => 'required|exists:category,id',

            'name_ar' => 'required|string|max:255',
            'name' => 'required|string|max:255',

            'short_notes_ar' => 'required|string|max:500',
            'short_notes' => 'required|string|max:500',

            'notes_ar' => 'required|string',
            'notes' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'front_image.required' => 'الصورة الأمامية مطلوبة.',
            'category_id.required' => 'يجب اختيار القسم.',
            'category_id.exists'   => 'القسم المختار غير موجود.',

            'name_ar.required' => 'اسم المنتج بالعربية مطلوب.',
            'name.required' => 'اسم المنتج بالإنجليزية مطلوب.',

            'short_notes_ar.required' => 'الوصف المختصر بالعربية مطلوب.',
            'short_notes.required' => 'الوصف المختصر بالإنجليزية مطلوب.',

            'notes_ar.required' => 'الوصف التفصيلي بالعربية مطلوب.',
            'notes.required' => 'الوصف التفصيلي بالإنجليزية مطلوب.',
        ];
    }
}
