<?php

namespace App\Http\Requests\TableBook;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTableBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $orderId = $this->route('id');
        return [
            'name' => 'required|string|max:255|unique:orders,name,' . $orderId,
            'table_id' => [
                'required',
                'exists:tables,id',
                function ($attribute, $value, $fail) {
                    if ($this->order_date == Carbon::today()->toDateString() && Order::where('table_id', $value)->where('order_date', $this->order_date)->where('order_time', '>', Carbon::now()->addHours(2)->format('H:i'))->exists()) {
                        $fail('Bàn này đã được đặt vào ngày hôm nay và trong vòng 2 giờ tới.');
                    }
                },
            ],
            'dish_id' => 'required|array',
            'dish_id.*' => 'exists:dishes,id',
            'quantities' => 'required|array',
            'quantities.*' => 'integer|min:1',
            'note' => 'nullable|string',
            'seats' => 'nullable|required',
            'status' => 'required|string',
            'order_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isPast()) {
                        $fail('Ngày đặt bàn phải là hôm nay hoặc trong tương lai.');
                    }
                },
                'unique:orders,table_id'
            ],
            'order_time' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) {
                    $orderDate = Carbon::parse($this->order_date);
                    $orderTime = Carbon::createFromFormat('H:i', $value);
                    if ($orderDate->isToday() && $orderTime->lessThan(Carbon::now()->addHours(2))) {
                        $fail('Giờ đặt phải trước ít nhất 2 giờ so với thời gian hiện tại.');
                    }
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên người đặt không được để trống.',
            'name.string' => 'Tên người đặt phải là chuỗi ký tự.',
            'name.max' => 'Tên người đặt không được vượt quá 255 ký tự.',
            'name.unique' => 'Tên người đặt đã tồn tại.',
            'table_id.required' => 'Vị trí bàn không được để trống.',
            'table_id.unique' => 'Bàn đã được đặt.',
            'table_id.exists' => 'Vị trí bàn không hợp lệ.',
            'dish_id.required' => 'Chọn ít nhất một món ăn.',
            'dish_id.*.exists' => 'Món ăn không hợp lệ.',
            'quantities.required' => 'Số lượng món ăn không được để trống.',
            'quantities.*.integer' => 'Số lượng món ăn phải là số nguyên.',
            'quantities.*.min' => 'Số lượng món ăn phải ít nhất là 1.',
            'note.string' => 'Ghi chú phải là chuỗi ký tự.',
            'status.required' => 'Trạng thái không được để trống.',
            'status.string' => 'Trạng thái phải là chuỗi ký tự.',
            'order_date.required' => 'Ngày đặt không được để trống.',
            'order_date.date' => 'Ngày đặt không hợp lệ.',
            'order_date.after_or_equal' => 'Ngày đặt phải là hôm nay hoặc trong tương lai.',
            'order_time.required' => 'Giờ đặt không được để trống.',
            'order_time.date_format' => 'Giờ đặt phải theo định dạng HH:mm.',
        ];
    }
}
