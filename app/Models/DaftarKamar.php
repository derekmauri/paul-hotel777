<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarKamar extends Model
{
    use HasFactory;
    protected $table = 'daftar_kamar';
    protected $guarded = [];

    public function tipe()
    {
        return $this->belongsTo(tipe::class);
    }
    public function tamu()
    {
        return $this->belongsTo(tamu::class);
    }
}
