<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart";
    protected $fillable = [
       'book_id', 'user_id'
    ]
    ;
    protected $primaryKey = 'id';
}
