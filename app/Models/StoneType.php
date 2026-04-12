<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoneType extends Model
{
    protected $fillable = [
        'name',
        'is_available',
        'reference_image',
        'description'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'stone_type_id');
    }

}
