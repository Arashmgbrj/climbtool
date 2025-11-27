<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // اضافه کردن این خط

class PersonalUser extends Authenticatable
{
    use HasFactory;

    // ستون‌هایی که به طور دستی پر می‌شوند
    protected $fillable = [
        'phone_number',
        'avrivated_token',
        'user_name',
        'is_avtive'
    ];

    // اگر از ویژگی دیگری به عنوان کلید اصلی استفاده می‌کنید:
    // protected $primaryKey = 'your_primary_key_column';
}
