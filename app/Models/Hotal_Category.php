<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotal_Category extends Model
{
    use HasFactory;
    protected $table = "hotal_category";
    protected $fillable = ['name','description'];


    public function hotel(){
        return $this->belongsTo(Hotal_Category::class,'hotal_category_id','id');
    }
    public function booking(){
        return $this->belongsTo(booking::class,'hotal_category_id','id');
    }
}
