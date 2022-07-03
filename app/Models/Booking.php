<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "booking";
    protected $fillable = ['user_id','is_paid','tour_id','hotel_category_id'];


    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function tour(){
        return $this->hasOne(Tour::class,'id','tour_id');
    }
    public function category(){
        return $this->hasOne(Hotal_Category::class,'id','hotal_category_id');
    }
}
