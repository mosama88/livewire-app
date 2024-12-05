<?php

namespace App\Http\Requests\Dashboard;

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
    public function rules(){
        return[
            'settings.name'=>'required|string|max:50',
            'settings.email'=>'required|string|email',
            'settings.address'=>'required',
            'settings.phone'=>'required',
            'settings.facebook'=>'required|url',
            'settings.twitter'=>'required|url',
            'settings.linkedin'=>'required|url',
            'settings.instgram'=>'required|url',
        ];
    }
}