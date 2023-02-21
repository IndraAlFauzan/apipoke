<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_barang extends Model
{
    protected $table = 'users_barang';
    protected $primaryKey = 'id_users_barang';
    protected $fillable = ['uid', 'id_barang'];

    public function users()
    {
        return $this->belongsTo(users::class, 'uid', 'uid');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }
}
