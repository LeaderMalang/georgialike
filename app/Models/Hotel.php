<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = "hotel";
    protected $fillable = ['name','description','images','hotal_category_id'];


    public function category(){
        return $this->hasOne(Hotal_Category::class);
    }
}
