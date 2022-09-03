<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class EditRequest extends FormRequest
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
            'name' => 'string|required',
            'role' => 'string|in:USER,WRITER,ADMIN|required',
        ];
    }
}
