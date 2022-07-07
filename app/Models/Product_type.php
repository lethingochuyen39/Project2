<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;

      // khai báo table ứng với model
      protected $table = "product_type";
      // khai báo trường khóa chính
      protected $primaryKey = 'product_type_id';
      protected $guarded =[];
      public $timestamps = false;
      // mặc định khóa chính sẽ tự động tăng
      public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
      protected $fillable = [
          'product_type_id',
          'product_type_name'
         
      ];
      
      public function products(){
        return $this->hasMany( related: Product::class, foreignKey:'product_type_id', localKey: 'product_type_id');
     }
}
