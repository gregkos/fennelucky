<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UniqueNameRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('fenneluckies', 'name')
                    ->where(function ($query) {
                        return $query->where('user_id', $this->user()->id);
                    }),
            ],
        ];
    }
}
