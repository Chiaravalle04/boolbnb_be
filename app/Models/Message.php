<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use app\Models\Apartment;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'name',
        'email',
        'message',
    ];

    public function apartment() {
        return $this->belongsTo(Apartment::class);
    }
}
