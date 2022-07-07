<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

        // khai báo table ứng với model
        protected $table = "promotion";
        // khai báo trường khóa chính
        protected $primaryKey = 'promotion_id';
        protected $guarded =[];
        public $timestamps = false;
        // mặc định khóa chính sẽ tự động tăng
        public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
        protected $fillable = [
            'promotion_id',
            'promotion_name',
            'promotion_type',
            'infinite_promotion',
            'promotion_start_time',
            'promotion_end_time',
            'promotion_value',
            'product_id', 
            'product_type_id'
        ];
}
