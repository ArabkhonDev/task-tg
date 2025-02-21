<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'title' => 'required',
            'desc' => 'required',
            'price'=>'required|numeric',
            'image' => 'mimes:jpg,bmp,png,svg|max:4096',
        ];
    }
}
