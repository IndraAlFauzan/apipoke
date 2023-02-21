<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
     /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'barang';

    protected $primaryKey = 'id_barang';

     /**
     * @var array
     */
    protected $fillable = ['title', 'id_kategori_barang'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function kategori_barang()
    {
        return $this->belongsTo(kategoriBarang::class, 'id_kategori_barang', 'id_kategori_barang');
    }
    public function users_barang()
    {
        return $this->hasMany(users_barang::class, 'id_barang', 'id_barang');
    }
}
