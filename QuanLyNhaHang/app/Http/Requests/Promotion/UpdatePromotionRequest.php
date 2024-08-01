<?php

namespace App\Http\Requests\Promotion;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePromotionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        $id= $this->route('id');
        return [
            'code' => 'required|min:4|max:255|string|unique:promotions,code,'. $id,
            'discount' =>'required|numeric|min:0',
            'start_time' => 'required|date|date_format:Y-m-d',
            'end_time' => 'required|date|date_format:Y-m-d|after_or_equal:start_date',
            'describe' =>'required|max:255|min:10',

        ];
    }

    /**
     * Custom messages for validation errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'code.required' => 'Mã không được để trống.',
            'code.min' => 'Mã phải có ít nhất 2 ký tự.',
            'code.max' => 'Mã không được quá 255 ký tự.',
            'code.string' => 'Mã phải là chuỗi ký tự.',
            'code.unique' => 'Mã đã tồn tại.',
            //discount
            'discount.required' => 'Giá giảm không được để trống.',
            'discount.max' => 'Giá giảm không được quá 255 ký tự.',
            'discount.numeric' => 'Giá giảm phải là số.',
            'discount.min' => 'Giá giảm không được là số âm.',
            //start_time
            'start_time.required' => 'Ngày bắt đầu là bắt buộc.',
            'start_time.date' => 'Ngày bắt đầu không hợp lệ.',
            'start_time.date_format' => 'Ngày bắt đầu phải có định dạng Y-m-d.',
            //end_time
            'end_time.required' => 'Ngày kết thúc là bắt buộc.',
            'end_time.date' => 'Ngày kết thúc không hợp lệ.',
            'end_time.date_format' => 'Ngày kết thúc phải có định dạng Y-m-d.',
            'end_time.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            //describe
            'describe.required' => 'Mô tả không được để trống.',
            'describe.max' => 'Mô tả không được quá 255 ký tự.',
            'describe.min' => 'Mô tả không được ít hơn 2 ký tự.',


        ];

    }
}
