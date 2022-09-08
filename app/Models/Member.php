<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['id_member', 'nama', 'alamat', 'jenis_kelamin', 'telp', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "mamber";
    protected $primaryKey = 'id_member';
}
