<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunTamu extends Model
{
    use HasFactory;
    protected $table = 'akun_tamu';
    protected $guarded = [];

    public function tamu()
    {
        return $this->hasOne(tamu::class, 'id', 'tamu_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
