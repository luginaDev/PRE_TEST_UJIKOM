<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'Pasien_ID', 'Pasien_ID');
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'Dokter_ID', 'Dokter_ID');
    }
    

}
