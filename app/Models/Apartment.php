<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use app\Models\User;
use app\Models\Message;
use app\Models\Image;
use app\Models\View;
use app\Models\Sponsorship;
use app\Models\Service;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover',
        'type',
        'address',
        'long',
        'lat',
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
