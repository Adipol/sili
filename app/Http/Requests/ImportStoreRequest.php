<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImportStoreRequest extends FormRequest
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
            'year' => 'required',
            'description_beginning' => 'required',
            'description_final' => 'required',
            'import_file' => 'required|file',
            'id_month' => ['required', Rule::exists('months', 'id')]
        ];
    }

    public function messages()
    {
        return [
            'year.required' => 'Es necesario ingresar el nombre.',
            'description_beginning.required' => 'Es necesario ingresar el la fecha de inicio.',
            'description_final.required' => 'Es necesario ingresar el la fecha final.',
            'import_file.required' => 'Es necesario adjuntar el archivo',
            'id_month.required' => 'Es necesario ingresar el mes'
        ];
    }
}
