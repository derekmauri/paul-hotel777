<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $guarded = [];

    public function tamu()
    {
        return $this->belongsTo(tamu::class, 'tamu_id');
    }
    public function tipe()
    {
        return $this->belongsTo(tipe::class, 'tipe_id');
    }
}
