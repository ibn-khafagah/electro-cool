<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name'          => 'nullable|string|max:255',

            'logo'          => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'favicon'       => 'nullable|image|mimes:jpg,jpeg,png,webp,ico,svg|max:1024',
            'bg'            => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:4096',

            'phone'         => 'nullable|string|max:50',
            'phone1'         => 'nullable|string|max:50',
            'email'         => 'nullable|email|max:255',
            'email1'         => 'nullable|email|max:255',
            'opening_hour'  => 'nullable|string|max:255',

            'address'       => 'nullable|string|max:255',
            'address_ar'    => 'nullable|string|max:255',

            'facebook'      => 'nullable|url|max:500',
            'location'      => 'nullable|url',
            'x'            => 'nullable|url|max:500',
            'instagram'     => 'nullable|url|max:500',
            'linkedin'      => 'nullable|url|max:500',
            'snapchat'      => 'nullable|url|max:500',
            'tiktok'        => 'nullable|url|max:500',
            'whatsapp'      => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string'         => 'اسم الموقع يجب أن يكون نصًا.',
            'logo.image'          => 'الملف المرفق للّوجو يجب أن يكون صورة.',
            'favicon.image'       => 'الملف المرفق للفافيكون يجب أن يكون صورة.',
            'bg.image'            => 'خلفية الموقع يجب أن تكون صورة.',

            'email.email'         => 'يجب إدخال بريد إلكتروني صحيح.',
            'email1.email'         => 'يجب إدخال بريد إلكتروني 1 صحيح.',

            'location.url'        => 'رابط Location يجب أن يكون رابطًا صحيحًا.',
            'facebook.url'        => 'رابط فيسبوك يجب أن يكون رابطًا صحيحًا.',
            'x.url'              => 'رابط X (تويتر) يجب أن يكون رابطًا صحيحًا.',
            'instagram.url'       => 'رابط إنستجرام يجب أن يكون رابطًا صحيحًا.',
            'linkedin.url'        => 'رابط لينكدإن يجب أن يكون رابطًا صحيحًا.',
            'snapchat.url'        => 'رابط سناب شات يجب أن يكون رابطًا صحيحًا.',
            'tiktok.url'          => 'رابط تيك توك يجب أن يكون رابطًا صحيحًا.',

            'whatsapp.string'     => 'رقم واتساب يجب أن يكون نصًا.',

            'address.string'      => 'العنوان بالإنجليزية يجب أن يكون نصًا.',
            'address_ar.string'   => 'العنوان بالعربية يجب أن يكون نصًا.',
        ];
    }
}
