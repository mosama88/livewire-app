<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'link'=>'required|url',
            'category_id'=>'required|exists:categories,id',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,webp,max:2000',
        ];
    }

    public function attributes(){
        return[
        'category_id'=>'Category',
    ];

    }
}
