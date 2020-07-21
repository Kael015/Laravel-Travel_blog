<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = ['judul_artikel','isi_artikel','url'];

    public function users(){
        return $this->belongsTo('App\user');
    }
}
