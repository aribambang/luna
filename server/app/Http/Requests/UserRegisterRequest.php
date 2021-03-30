<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'email' => 'required|unique:users',
      'name' => 'required',
      'password' => 'required|min:6'
    ];
  }
}
