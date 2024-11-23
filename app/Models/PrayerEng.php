<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prayer;

class PrayerEng extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text',
        'comment',
    ];

    public function prayer(){
        return $this->hasOne(Prayer::class);
    }
}
