<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class EditArticle extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'title' => 'string|required',
      'image_poster' => 'image',
      'category_id' => 'required|exists:categories,id',
      'content' => 'string|required',
    ];
  }
}
