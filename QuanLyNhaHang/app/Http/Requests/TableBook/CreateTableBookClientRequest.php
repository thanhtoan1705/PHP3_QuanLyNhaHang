<?php

namespace App\Http\Requests\TableBook;

use App\Models\Order;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTableBookClientRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('orders'),
            ],
            'table_id' => [
                'required',
                'exists:tables,id',
                function ($attribute, $value, $fail) {
                    if (Reservation::where('table_id', $value)
                        ->where('order_date', $this->order_date)
                        ->where('order_time', '>', Carbon::now()->addHours(2)->format('H:i'))
                        ->exists()
                    ) {
                        $fail('Bàn này đã được đặt vào ngày hôm nay và trong vòng 2 giờ tới.');
                    }
                },
                'unique:orders,table_id'
            ],
            'dish_id' => 'nullable',
            'dish_id.*' => 'nullable',
            'quantities' => 'nullable',
            'quantities.*' => 'nullable',
            'note' => 'nullable|string',
            'order_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isPast()) {
                        $fail('Ngày đặt bàn phải là hôm nay hoặc trong tương lai.');
                    }
                },
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

    public function messages(): array
    {
        return [
            'name.required' => 'Người đặt bàn là bắt buộc.',
            'name.string' => 'Tên người đặt phải là một chuỗi ký tự.',
            'name.max' => 'Tên người đặt không được vượt quá 255 ký tự.',
            'name.unique' => 'Tên người đặt đã tồn tại.',
            'table_id.required' => 'Chọn bàn là bắt buộc.',
            'table_id.unique' => 'Bàn đã được đặt.',
            'table_id.exists' => 'Bàn không tồn tại.',
            'note.string' => 'Ghi chú phải là một chuỗi ký tự.',
            'order_date.required' => 'Ngày đặt không được để trống.',
            'order_date.date' => 'Ngày đặt không hợp lệ.',
            'order_date.after_or_equal' => 'Ngày đặt phải là hôm nay hoặc trong tương lai.',
            'order_time.required' => 'Giờ đặt không được để trống.',
            'order_time.date_format' => 'Giờ đặt phải theo định dạng HH:mm.',
        ];
    }
}
