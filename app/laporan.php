<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    //
    public function user(){
    	return $this->belongsTo('App\User','id_pelapor');
    }
}
