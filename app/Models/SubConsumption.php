<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubConsumption extends Model
{
    use HasFactory;

    protected $fillable = ['qtyConsumed', 'dateConsumed', 'cons_id'];


    public function consumption(){
        return $this->belongsTo(Consumption::class,'cons_id');
    }
}
