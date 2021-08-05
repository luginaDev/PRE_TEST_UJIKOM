<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function Poli()
    {
        return $this->belongsTo(Poli::class, 'Poli_ID', 'Poli_ID');
    }
}
