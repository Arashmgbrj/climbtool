<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    // نام جدول در پایگاه داده
    protected $table = 'product_models';

    // فیلدهایی که قابل پر کردن هستند
    protected $fillable = [
        'img',        // تصویر اصلی
        'img1',       // تصویر دوم
        'img2',       // تصویر سوم
        'img3',       // تصویر چهارم
        'alt0',       // متن جایگزین برای تصویر اصلی
        'alt1',       // متن جایگزین تصویر دوم
        'alt2',       // متن جایگزین تصویر سوم
        'alt3',       // متن جایگزین تصویر چهارم
        'title',      // عنوان محصول
        'price',      // قیمت محصول
        'short_des',  // توضیح کوتاه
        'exist',      // موجود بودن محصول
        'integer',    // تعداد محصول
        'des',        // توضیحات محصول
        'tags',       // برچسب‌های محصول
        'cat1',       // دسته‌بندی اول
        'cat2',       // دسته‌بندی دوم
        'cat3',       // دسته‌بندی سوم
        'cat4',       // دسته‌بندی چهارم
        'is_offer',   // آیا محصول تخفیف‌دار است؟
        'is_offer_price', // آیا محصول قیمت تخفیفی دارد؟
    ];
}