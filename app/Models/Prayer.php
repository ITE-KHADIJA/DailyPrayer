<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrayerDutch;
use App\Models\PrayerEng;

class Prayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'voice',
        'repetitions',
        'comment',
    ];

    public function prayer_dutch(){
        return $this->hasOne(PrayerDutch::class);
    }

    public function prayer_eng(){
        return $this->hasOne(PrayerEng::class);
    }
}
