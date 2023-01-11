<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';
    protected $fillable = [
        'shop_name',
        'tell_no',
        'address',
        'city',
        'postcode',
        'state',
        'shop_img',
    ];
    public function User()
    {
        return $this->belongsTo('App\Models\Shop', 'id', 'user_id');
    }
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
