<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $primaryKey='id_transaksi';

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_user');
    }
    public function katalog(): BelongsTo
    {
        return $this->belongsTo(katalog::class,'id_katalog');
    }
}
