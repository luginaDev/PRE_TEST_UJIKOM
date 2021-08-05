<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'Poli_ID', 'Poli_ID');
    }


}
