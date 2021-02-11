<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = ['category', 'Name', 'book_id', 'created_at'];

    protected $primaryKey = 'id';


    public function boooks(){
         return $this->belongsTo(Book::class, 'book_id');
    }
    public function prices(){
         return $this->belongsTo(Price::class, 'price_id');
    }
}
