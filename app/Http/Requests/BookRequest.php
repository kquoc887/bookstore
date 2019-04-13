<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'category'       => 'required',
            'supplier'       => 'required',
            'txtBookName'    => 'required',
            'txtPubCompany'  => 'required',
            'txtWeight'      => 'required',
            'txtSize'        => 'required',
            'txtAuthor'      => 'required',
            'txtPages'       => 'required|numeric',
            'fImage'         => 'required|image',
            'txtPrice'       => 'required|numeric',
            'txtPubYear'     => 'required',
            'txtDescription' => 'required',
        ];
    }

    public function messages() {
        return [
             'category.required'       => 'Please Choose Category For Book',
             'supplier.required'       => 'Please Choose Supplier For Book',
             'txtBookName.required'    => 'Please Enter Name Of Book',
             'txtPubCompany.required'  => 'Please Enter Publishing Name',
             'txtWeight.required'      => 'Please Enter Weight Of Book',
             'txtSize.required'        => 'Please Enter Size of Book',
             'txtAuthor.required'      => 'Please Enter Author Of Book',
             'txtPages.required'       => 'Please Enter Page of Book',
             'txtPages.numeric'        => 'Please Enter Number For Page of Book',
             'fImage.required'         => 'Please Choose Image For Book',
             'txtPrice.required'       => 'Please Enter Price of Book',
             'txtPrice.numeric'        => 'Please Enter Number For Price of Book',
             'txtPubYear.required'     => 'Please Enter Publishing Year of Book',
             'txtPubYear.numeric'      => 'Please Enter Number For Publishing Year of Book',
             'txtDescription.required' => 'Please Enter Description Of Book',
         
        ];
    }
}
