<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pleton extends Model
{
    use HasFactory;

    protected $guarded = 'id';

    protected $fillable = ['id_pleton', 'nama_pleton', 'serdik_id'];

    public function Serdik(){
        return $this->belongsTo(serdik::class);
    }
}
