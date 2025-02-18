<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

  
    public function rules(): array
    {
        return [
            'title' => 'required|max:10',
            'desc' => 'required',
            'price'=>'required|numeric',
            'image' => 'mimes:jpg,bmp,png,svg|max:4096',
        ];
    }
}
