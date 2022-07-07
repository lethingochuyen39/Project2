<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

     // khai báo table ứng với model
     protected $table = "brands";
     // khai báo trường khóa chính
     protected $primaryKey = 'brand_id';
     protected $guarded =[];
     public $timestamps = false;
     // mặc định khóa chính sẽ tự động tăng
     public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
     protected $fillable = [
         'brand_id',
         'brand_name',
         'brand_logo'
    
     ];

     public function products(){
        return $this->hasMany(related: Product::class, foreignKey:'brand_id', localKey:'brand_id');
     }
}
