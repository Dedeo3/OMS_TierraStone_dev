<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class FinishingType extends Model
{
    protected $fillable = ['name', 'is_available'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'finishing_type_id');
    }

}
