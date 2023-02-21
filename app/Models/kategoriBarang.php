<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriBarang extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kategori_barang';

    protected $primaryKey = 'id_kategori_barang';

     /**
     * @var array
     */
    protected $fillable = ['nama_kategori_barang'];

   
    public function barang()
    {
        return $this->hasMany(barang::class, 'id_kategori_barang', 'id_kategori_barang');
    }
}
