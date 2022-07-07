<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // khai báo table ứng với model
    protected $table = "products";
    // khai báo trường khóa chính
    protected $primaryKey = 'product_id';
    protected $guarded =[];
    public $timestamps = false;
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'product_highlight',
        'product_date',
        'product_description',
        'product_image',
        'product_type_id', 
        'brand_id'
    ];

    public function orderdetails(){
        return $this->hasMany(related: OrderDetail::class, foreignKey:'product_id', localKey:'product_id');
     }
     public function comments(){
        return $this->hasMany(related: Comment::class, foreignKey:'product_id', localKey:'product_id');
     }
     public function promotion(){
        return $this->hasMany(related: Promotion::class, foreignKey:'product_id', localKey:'product_id');
     }
     public function slides(){
        return $this->hasMany(related: Slide::class, foreignKey:'product_id', localKey:'product_id');
     }

     public function Product_type(){
        return $this->belongsTo(related: Product_type::class, foreignKey: 'product_type_id', ownerKey: 'product_type_id');
     }
     public function brands(){
        return $this->belongsTo(related: Brand::class, foreignKey: 'brand_id', ownerKey: 'brand_id');
     }
}
