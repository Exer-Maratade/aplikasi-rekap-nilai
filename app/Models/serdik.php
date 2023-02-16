<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serdik extends Model
{
    use HasFactory;

    protected $table ='serdik';

    protected $guarded = ['id'];

    public function Pleton(){
        return $this->hasMany(pleton::class);
    }
}
