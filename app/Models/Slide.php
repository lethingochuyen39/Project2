<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    
      // khai báo table ứng với model
      protected $table = "slides";
      // khai báo trường khóa chính
      protected $primaryKey = 'slide_id';
      protected $guarded =[];
      public $timestamps = false;
      // mặc định khóa chính sẽ tự động tăng
      public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
      protected $fillable = [
          'slide_id',
          'image',
          'product_id'
      ];

      public function products(){
        return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey: 'product_id');
     }
}
