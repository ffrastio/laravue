<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama', 'slug', 'kategori', 'deskripsi', 'harga_modal', 'harga_jual', 'harga_terbaru', 'stok', 'isi_per_dus', 'visible'
    ];

    /**
     * Get all of the Galleries for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function Galleries()
    // {
    //     return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    // }
}
