<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorytRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
                'title'=> 'required',
                'desc'=> 'required',
                'image'=> 'mimes:jpg,bmp,png,svg|max:4096',
        ];
    }
}
