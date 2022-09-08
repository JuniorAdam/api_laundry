<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillabel = ['id_paket', 'jenis', 'harga'];
    protected $hidden = ['created_at', 'update_at'];
    protected $table = "paket";
    protected $primaryKey = 'id_paket';
}
