<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'table_id',
        'name',
        'phone',
        'guests',
        'note',
        'status',
        'reservation_date',
        'reservation_time',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'reservation_dish')->withPivot('quantity');
    }

    public function calculateTotalPrice()
    {
        $total = 0;
        foreach ($this->dishes as $dish) {
            $total += $dish->pivot->quantity * $dish->price;
        }
        return $total;
    }

    public static function createNewBookTable($validatedData)
    {
        $order = self::create([
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'table_id' => $validatedData['table_id'],
            'note' => $validatedData['note'],
            'status' => $validatedData['status'],
            'reservation_date' => $validatedData['reservation_date'],
            'reservation_time' => $validatedData['reservation_time'],
            'seats' => $validatedData['seats'],
        ]);

        if (isset($validatedData['dish_id'])) {
            $dishIds = $validatedData['dish_id'];
            $quantities = $validatedData['quantities'] ?? [];

            $order->dishes()->detach();

            foreach ($dishIds as $dishId) {
                if (isset($quantities[$dishId]) && $quantities[$dishId] > 0) {
                    $order->dishes()->attach($dishId, ['quantity' => $quantities[$dishId]]);
                }
            }
        }

        return $order;
    }

    public function updateNewBookTable($validatedData)
    {
        $this->update([
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'table_id' => $validatedData['table_id'],
            'note' => $validatedData['note'],
            'status' => $validatedData['status'],
            'reservation_date' => $validatedData['order_date'],
            'reservation_time' => $validatedData['order_time'],
            'seats' => $validatedData['seats'],
        ]);

        if (isset($validatedData['dish_id'])) {
            $dishIds = $validatedData['dish_id'];
            $quantities = $validatedData['quantities'] ?? [];

            $this->dishes()->detach();

            foreach ($dishIds as $dishId) {
                if (isset($quantities[$dishId]) && $quantities[$dishId] > 0) {
                    $this->dishes()->attach($dishId, ['quantity' => $quantities[$dishId]]);
                }
            }
        }

        return $this;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($reservation) {
            $reservation->dishes()->detach();
        });
    }
}
