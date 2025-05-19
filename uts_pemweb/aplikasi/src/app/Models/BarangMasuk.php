<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
    'barang_id',
    'jumlah_masuk',
    'tanggal_masuk',
    ];


    public function Barang()
    {
        return $this->belongsTo(Barang::class);
    }
}