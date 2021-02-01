<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveCaseLawRequest extends FormRequest
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
      'url' => [
        $this->routeIs('jurisprudencias.update') ? 'nullable' : 'required',
        'mimes:pdf'
      ],
      'title' => 'max:255',
      'description' => 'max:255',
      'case_law_date' => [
        $this->routeIs('jurisprudencias.update') ? 'nullable' : 'required',
        'date'
      ],
      'category_id' => [
        $this->routeIs('jurisprudencias.update') ? 'nullable' : 'required',
        Rule::notIn("-1")
      ]
    ];
  }

  public function attributes()
  {
    return [
      'url' => 'Archivo de jurisprudencia',
      'case_law_date' => 'Fecha de jurisprudencia',
      'category_id' => 'Categoría'
    ];
  }
}
