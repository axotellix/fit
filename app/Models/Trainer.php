<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $primaryKey = 'trainer_id';

    // assign > "Trainers" table with "Images" (one to one)
    public function image() {
        return $this->belongsTo(Image::class, 'photo_id');
    }
}
