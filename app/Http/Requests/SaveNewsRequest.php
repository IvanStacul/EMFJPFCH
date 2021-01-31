<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveNewsRequest extends FormRequest
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
   * @return array
   */
  public function rules()
  {

    return [
      'title' => 'required|min:5|max:255',
      'summary' => 'required',
      'cover_page' => [
        $this->routeIs('noticias.update') ? 'nullable' : 'required',
        'mimes:png,jpg,jpeg,webp',
      ],
      'date' => 'required',
      'content' => 'required|min:5',
    ];
  }

  public function attributes()
  {
    return [
      'summary' => 'subtítulo',
      'cover_page' => 'portada',
    ];
  }
}
