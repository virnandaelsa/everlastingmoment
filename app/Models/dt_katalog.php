<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_katalog extends Model
{
    use HasFactory;
    protected $table='dt_katalog';
    protected $primaryKey='id_dt_katalog';

    public function katalog()
    {
        return $this->hasOne(katalog::class,'id_katalog','id_katalog');
    }
    public function transaksi()
    {
        return $this->belongsToMany(transaksi::class,
                                    'katalog', /* dt_katalog diambil semua atau * dan join dengan tabel katalog */
                                    'id_katalog'/* kolom sebelum ngambil ID */,
                                    'id_katalog'/* primary key katalog */,
                                    'id_katalog'/* ngambil ID */,
                                    'id_katalog'/* Foreign Key */);
    }
}
