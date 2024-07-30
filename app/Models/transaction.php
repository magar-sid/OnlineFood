<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'transanction-Id', 'payment_method', 'transaction_amt', 'transaction_date', 'status'
    ];
}
