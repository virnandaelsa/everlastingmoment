<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPJ extends Model
{
    use HasFactory;
    protected $table='detailPJ';
    protected $primaryKey='id_detailPJ';

    public function pengguna()
    {
        return $this->belongsTo(User::class,'id_detailPJ');
    }
}
