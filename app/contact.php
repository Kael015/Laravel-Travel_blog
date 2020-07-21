<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $table = 'message';

    protected $fillable = ['nama','email','topic','isi_pesan'];
}
