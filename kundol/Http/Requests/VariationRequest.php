<?php

namespace App\Http\Requests;

use App\Models\Admin\Language;
use Illuminate\Foundation\Http\FormRequest;

class VariationRequest extends FormRequest
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
        $size = Language::count();
        return [
            'name' => 'required|array',
            'name.*' => 'string|max:191',
            'language_id' => 'required|array|exists:languages,id',
            'attribute_id' => 'required|exists:attributes,id',
        ];
    }
}
