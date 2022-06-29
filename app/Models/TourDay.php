<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDay extends Model
{
    use HasFactory;
    protected $table = "tour_days";
    protected $fillable = ['day_no','description','image','tour_id'];
    public function tour(){
        return $this->hasOne(Tour::class);
    }
}
