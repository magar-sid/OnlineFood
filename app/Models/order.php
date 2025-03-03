<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'item_id', 'order_id', 'quantity', 'price'
    ];
}
