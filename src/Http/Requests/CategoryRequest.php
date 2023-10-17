<?php

namespace Returntrueir\Categories\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $categoryId = is_null($this->category) ? 0 : $this->category->id;
        return [
            'slug_title_url' => ['required','string','min:2','unique:categories,slug_title_url,'.$categoryId] ,
            'page_title' => ['nullable'] ,
            'h1_title' => ['nullable'] ,
            'body' => ['nullable'] ,
            'seo_meta_description' => ['nullable'] ,
            'seo_schema_code' => ['nullable'] ,
            'sort' => ['nullable', 'numeric'] ,
            'category_id' => ['nullable','exists:categories,id'] ,
        ];
    }
    protected function prepareForValidation()
    {
        if (is_null($this->input("page_title")))
        {
            $this->merge(['page_title'=> $this->input("slug_title_url")]);
        }
        if (is_null($this->input("h1_title")))
        {
            $this->merge(['h1_title'=> $this->input("slug_title_url")]);
        }
        if (is_null($this->input("seo_meta_description")))
        {
            $this->merge(['seo_meta_description'=> $this->input("slug_title_url")]);
        }
    }
}