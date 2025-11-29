<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
    public function rules()
    {
        return [
            // Images & Video (لا يوجد منهم عربي/إنجليزي)
            'image1'          => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'image2'          => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'video'           => 'nullable|string',

            // Titles
            'sub_title'       => 'nullable|string|max:255',
            'sub_title_ar'    => 'nullable|string|max:255',
            'title'           => 'nullable|string|max:255',
            'title_ar'        => 'nullable|string|max:255',

            // Notes
            'notes'           => 'nullable|string',
            'notes_ar'        => 'nullable|string',

            // Check 1
            'check1'          => 'nullable|string',
            'check1_ar'       => 'nullable|string',
            'check1_notes'    => 'nullable|string',
            'check1_notes_ar' => 'nullable|string',

            // Check 2
            'check2'          => 'nullable|string',
            'check2_ar'       => 'nullable|string',
            'check2_notes'    => 'nullable|string',
            'check2_notes_ar' => 'nullable|string',

            // Check 3
            'check3'          => 'nullable|string',
            'check3_ar'       => 'nullable|string',
            'check3_notes'    => 'nullable|string',
            'check3_notes_ar' => 'nullable|string',

            // Check 4
            'check4'          => 'nullable|string',
            'check4_ar'       => 'nullable|string',
            'check4_notes'    => 'nullable|string',
            'check4_notes_ar' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [

            // Images & Video
            'image1.image' => 'الصورة الأولى يجب أن تكون ملف صورة صالح.',
            'image2.image' => 'الصورة الثانية يجب أن تكون ملف صورة صالح.',
            'video.string' => 'رابط الفيديو يجب أن يكون نصًا صالحًا.',

            // Titles
            'sub_title.string'    => 'Sub Title must be a valid string.',
            'sub_title_ar.string' => 'العنوان الفرعي بالعربية يجب أن يكون نصًا.',
            'title.string'        => 'Title must be a valid string.',
            'title_ar.string'     => 'العنوان بالعربية يجب أن يكون نصًا.',

            // Notes
            'notes.string'        => 'Notes must be a valid text.',
            'notes_ar.string'     => 'الملحوظات بالعربية يجب أن تكون نصًا.',

            // Check 1
            'check1.string'          => 'Check 1 must be a valid text.',
            'check1_ar.string'       => 'الخانة الأولى بالعربية يجب أن تكون نصًا.',
            'check1_notes.string'    => 'Check 1 notes must be a valid text.',
            'check1_notes_ar.string' => 'ملاحظات الخانة الأولى بالعربية يجب أن تكون نصًا.',

            // Check 2
            'check2.string'          => 'Check 2 must be a valid text.',
            'check2_ar.string'       => 'الخانة الثانية بالعربية يجب أن تكون نصًا.',
            'check2_notes.string'    => 'Check 2 notes must be a valid text.',
            'check2_notes_ar.string' => 'ملاحظات الخانة الثانية بالعربية يجب أن تكون نصًا.',

            // Check 3
            'check3.string'          => 'Check 3 must be a valid text.',
            'check3_ar.string'       => 'الخانة الثالثة بالعربية يجب أن تكون نصًا.',
            'check3_notes.string'    => 'Check 3 notes must be a valid text.',
            'check3_notes_ar.string' => 'ملاحظات الخانة الثالثة بالعربية يجب أن تكون نصًا.',

            // Check 4
            'check4.string'          => 'Check 4 must be a valid text.',
            'check4_ar.string'       => 'الخانة الرابعة بالعربية يجب أن تكون نصًا.',
            'check4_notes.string'    => 'Check 4 notes must be a valid text.',
            'check4_notes_ar.string' => 'ملاحظات الخانة الرابعة بالعربية يجب أن تكون نصًا.',
        ];
    }

}
