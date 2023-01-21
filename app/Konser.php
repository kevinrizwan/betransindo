<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    //
    protected $table = "konsers";
    protected $fillable = [
        'nama', 'jadwal', 'deskripsi', 'id'
    ];
    public function Tiket()
    {
        return $this->hasMany(Tiket::class);
    }
}
