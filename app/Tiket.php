<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tiket extends Model
{
    //
    protected $table = "tikets";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'user_id', 'konser_id', 'status'
    ];
    public function Konser()
    {
        return $this->belongsTo(Konser::class);
    }
    public function User()
    {
        return $this->belongsTo(Auth::user());
    }
}
