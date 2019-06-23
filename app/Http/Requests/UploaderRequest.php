<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploaderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'=>'required',
          'design'=>'required',
          'color'=>'required',
          'maker'=>'required',
          'price'=>'required',
          'thum'=>'required|image|mimes:jpeg,png,jpg,gif|max:1024|dimensions:max_width=300,ratio=1/1',
        ];
    }

    public function messages()
    {
        return [
          "required" => "必須項目です。",
          "image" => "指定されたファイルが画像ではありません。",
          "mines" => "指定された拡張子（PNG/JPG/GIF）ではありません。",
          "max" => "１Ｍを超えています。",
          "dimensions" => "画像の比率は1：1で横は最大300pxです。",
    ];
    }


}
