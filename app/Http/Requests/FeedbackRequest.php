<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        $isUpdate = $this->route('id') ? true : false;

        return [
            'image'       => ($isUpdate ? 'nullable' : 'required') . '|image|mimes:jpg,jpeg,png,webp|max:2048',
            'name'        => 'required|string|max:255',
            'name_ar'     => 'required|string|max:255',
            'job'         => 'required|string|max:255',
            'job_ar'      => 'required|string|max:255',
            'notes'       => 'required|string',
            'notes_ar'    => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'image.required'        => 'الصورة  مطلوبة عند الإضافة.',
            'image.max'             => 'الحجم المسموح به للصورة يجب ان لا يتعدي 2 ميجا',
            'image.mimes'           => 'الصور المقبولة يجب ان تكون jpg, jpeg, png, webp.',
            'name.required'         => 'حقل الأسم انجليزي مطلوب.',
            'name_ar.required'      => 'حقل الأسم عربي مطلوب.',
            'job.required'          => 'حقل المسمى الوظيفي انجليزي مطلوب.',
            'job_ar.required'       => 'حقل المسمى الوظيفي عربي مطلوب.',
            'notes.required'        => 'حقل الوصف انجليزي مطلوب.',
            'notes_ar.required'     => 'حقل الوصف عربي مطلوب.',
        ];
    }
}
