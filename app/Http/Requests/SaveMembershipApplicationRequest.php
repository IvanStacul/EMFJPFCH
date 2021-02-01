<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveMembershipApplicationRequest extends FormRequest
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
      'name' => 'min:4|max:255|required',
      'last_name' => 'max:255|required',
      'dni' => 'max:255|required',
      'nationality' => 'max:255|required|not_in:-1',
      'birthdate' => 'date|required',
      'civil_status' => ['required',Rule::notIn('-1')],
      'home_address' => 'required|max:255',
      'email' => 'required|max:255|email',
      'personal_phone' => 'required|max:255',
      'work_phone' => 'required|max:255',
      'job' => 'required|max:255',
      'dependence' => 'required|max:255',
      'region' => ['required', Rule::notIn('-1')],
      'department' => ['required', Rule::notIn('-1')],
    ];
  }
}
