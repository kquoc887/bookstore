<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'txtSupplierName' => 'required|unique:suppliers,name'
        ];
    }

    public function messages() {
        return [
            'txtSupplierName.required' => 'Plesae Enter Supplier Name',
            'txtSupplierName.unique'   => 'This Supplier Name is exists'
        ];
    }
}
