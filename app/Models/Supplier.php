<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function buku()
    {

        return $this->hasMany('App\Models\Buku', 'supplier_id');
    }
}
