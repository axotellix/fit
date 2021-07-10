<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $primaryKey = 'plan_id';

    // assign > "Prices" table with "Card plans"
    public function card() {
        return $this->belongsTo(CardPlan::class, 'plan_id');
    }
}
