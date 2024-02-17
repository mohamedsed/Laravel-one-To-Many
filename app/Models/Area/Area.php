<?php

namespace App\Models\Area;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;
    protected $fillable =['parent_area_id' , 'name'];
   public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class , 'parent_area_id');
    }
}
