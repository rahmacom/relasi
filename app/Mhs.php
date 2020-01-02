<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nim','nama','alamat','prodi_id'];

    public function prodi()
    {
        return $this->belongsTo('App\prodi', 'prodi_id');
    }
}
