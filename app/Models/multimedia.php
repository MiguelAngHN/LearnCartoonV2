<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\boceto;

class multimedia extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function actividads(){
        return $this->hasMany('App\Models\actividad');
    }

    public function boceto() {
        return $this->hasOne(boceto::class);
    }

}
