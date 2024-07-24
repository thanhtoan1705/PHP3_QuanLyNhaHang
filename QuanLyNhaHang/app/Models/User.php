<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'slug',
        'active',
        'google_id',
        'facebook_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getLatestPaginated($perPage = 5)
    {
        return self::latest('id')->where('active', 'active')->paginate($perPage);
    }
    public static function getInactiveLatestPaginated($perPage = 5)
    {
        return self::latest('id')->where('active', 'inactive')->paginate($perPage);
    }

    public static function createUser($data)
    {

        $data['password'] = Hash::make($data['password']);
        $data['active'] = 'active';

        return self::create($data);
    }

    public function updateUser(array $data)
    {
        // Nếu không có mật khẩu mới, giữ lại mật khẩu cũ
        if (isset($data['password']) && $data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $this->password;
        }

        // Cập nhật người dùng
        return $this->update($data);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
