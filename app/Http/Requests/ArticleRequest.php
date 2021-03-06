<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // por defecto esta en false pero lo pondremos en true
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => 'min:8|max:255|required|unique:articles',
            'content'       => 'min:8|max:255|required',
            'category_id'   => 'required',
            'image'         => 'image|required'
        ];
    }
}
