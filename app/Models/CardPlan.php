<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardPlan extends Model
{
    use HasFactory;

    protected $primaryKey = 'plan_id';

    // assign > "Card plans" table with "Prices"
    public function card() {
        return $this->hasOne(Price::class);
    }
}
