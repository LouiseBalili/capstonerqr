<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;

    protected $fillable = ['monthlyConsumed', 'inventory_id', 'subcons_id'];


    public function inventory(){
        return $this->belongsTo(Inventory::class,'inventory_id');
    }

    public function subconsumption(){
        return $this->belongsTo(SubConsumption::class,'subcons_id');
    }
}
