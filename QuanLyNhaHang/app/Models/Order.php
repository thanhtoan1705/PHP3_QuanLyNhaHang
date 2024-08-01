<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'table_id', 'name', 'note', 'status', 'order_date', 'order_time'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class, 'order_dish')->withPivot('quantity')->withTimestamps();
    }

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
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
            'name' => $validatedData['name'],
            'table_id' => $validatedData['table_id'],
            'note' => $validatedData['note'],
            'status' => $validatedData['status'],
            'order_date' => $validatedData['order_date'],
            'order_time' => $validatedData['order_time'],
            'seats' => $validatedData['seats'],
        ]);

        if (isset($validatedData['dish_id'])) {
            $dishIds = $validatedData['dish_id'];
            $quantities = $validatedData['quantities'] ?? [];

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
            'name' => $validatedData['name'],
            'table_id' => $validatedData['table_id'],
            'note' => $validatedData['note'],
            'status' => $validatedData['status'],
            'order_date' => $validatedData['order_date'],
            'order_time' => $validatedData['order_time'],
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

        static::deleting(function ($order) {
            $order->dishes()->detach();
        });
    }
}
