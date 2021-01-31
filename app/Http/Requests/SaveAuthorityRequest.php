<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveAuthorityRequest extends FormRequest
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
      'name' => 'required|max:255|min:4',
      'photo' => [
        $this->routeIs('autoridades.update') ? 'nullable' : 'required',
        'image',
      ],
      'position' => 'required|min:6',
      'group' => ['required', Rule::notIn("-1")],
      'weight' => 'required',
    ];
  }
}
