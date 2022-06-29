<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = "tour_details";
    protected $fillable = ['title','image','charges','category_id'];


    public function category(){
        return $this->hasOne(TourCategory::class);
    }
    public function tour_day(){
        return $this->belongsTo(TourDay::class);
    }
}
