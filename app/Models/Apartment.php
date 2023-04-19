<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;
use App\Models\Message;
use App\Models\Image;
use App\Models\View;
use App\Models\Sponsorship;
use App\Models\Service;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'description',
        'cover',
        'type',
        'address',
        'city',
        'latitude',
        'longitude',
        'price',
        'availability',
        'room',
        'bed',
        'bathroom',
        'square_meters',
        'visibility',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function views() {
        return $this->hasMany(View::class);
    }

    public function sponsorships() {
        return $this->belongsToMany(Sponsorship::class);
    }

    public function services() {
        return $this->belongsToMany(Service::class);
    }

}
