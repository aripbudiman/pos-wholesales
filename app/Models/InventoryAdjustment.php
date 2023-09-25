<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryAdjustment extends Model
{
    use HasFactory;
    protected $table = 'inventory_adjustments';
    protected $guarded=[];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
