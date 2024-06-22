<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $table='katalog';
    protected $primaryKey='id_katalog';

    public function detailPJ(): BelongsTo
    {
        return $this->belongsTo(detailPJ::class,'id_detail_pj');
    }
}
