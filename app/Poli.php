<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    public function Dokter()
    {
        return $this->hasMany(Dokter::class, 'Poli_ID');
    }
}
