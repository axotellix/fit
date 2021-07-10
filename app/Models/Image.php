<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $primaryKey = 'photo_id';

    // assign > "Images" table with "Trainers" (one to one)
    public function trainer() {
        return $this->hasOne(Trainer::class);
    }
}
