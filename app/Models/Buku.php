<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $visible = ['title', 'supplier_id', 'jenis', 'stok', 'harga', 'cover'];
    protected $fillable = ['title', 'supplier_id', 'jenis', 'stok', 'harga', 'cover'];
    public $timestamps = true;

    public function supplier()
    {

        return $this->belongsTo('App\Models\Supplier', 'supplier_id');
    }

    public function transaksi()
    {

        return $this->hasMany('App\Models\Transaksi', 'buku_id');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return asset('image/buku/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return unlink(public_path('image/buku/' . $this->cover));
        }

    }
}
