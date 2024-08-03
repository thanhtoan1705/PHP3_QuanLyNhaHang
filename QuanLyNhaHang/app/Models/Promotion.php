<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'start_time',
        'end_time',
        'describe'
    ];
    protected $dates = ['start_time', 'end_time'];

    public function getStartTimeAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getEndTimeAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
