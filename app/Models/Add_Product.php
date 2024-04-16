<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Add_ProductController;

class Add_Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'inventories';
    protected $fillable = [
        'id',
        'product',
        'quantity',
        'price',
    ];
}
