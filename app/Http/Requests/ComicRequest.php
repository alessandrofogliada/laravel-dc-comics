<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
        return[
                'title'=>'required|min:3|max:255',
                'description'=>'required|min:3|max:255',
                'thumb'=>'required|min:1|max:255',
                'price'=>'required|min:1',
                'series'=>'required|min:1|max:255',
                'sale_date'=>'required|min:1|max:255',
                'type'=>'required|min:1|max:255',
        ];
    }

    public function messages(){
        return ['
                title.required'=>'il campo deve avere almeno 3 caratteri',
                'description.required'=>'il campo deve avere almeno 3 caratteri',
                'thumb.required'=>'il campo deve avere almeno 1 caratteri',
                'price.required'=>'il campo deve avere almeno 1 caratteri',
                'series.required'=>'il campo deve avere almeno 3 caratteri',
                'sale_date.required'=>'il campo deve avere almeno 3 caratter',
                'type.required'=>'il campo deve avere almeno 3 caratteri',
    ];
    }
}
