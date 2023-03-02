<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class getdonate extends Model
{
    use HasFactory;
    protected $table='getdonate';
    protected $fillable=['user_id','book_id','return_date','approved_date','status','fine','issue_date','approved_id'];

    public function product()
    {
        return $this->belongsTo(Product::class,'book_id');
    }
}
