<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Buku;

class BukusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat sample supplier
        $supplier1 = Supplier::create(['name' => 'Adya eka amelia']);
        $supplier2 = Supplier::create(['name' => 'Ike Vadilla']);
        $supplier3 = Supplier::create(['name' => 'M Fauzil Adhim']);

        // membuat sample buku
        $buku1 = Buku::create(['title' => 'Dilan',
            'stok' => 3, 'supplier_id' => $supplier1->id]);
        $buku2 = Buku::create(['title' => 'Jalan jalan ke bulan',
            'stok' => 2, 'supplier_id' => $supplier2->id]);
        $buku3 = Buku::create(['title' => 'Mariposa',
            'stok' => 3, 'supplier_id' => $supplier3->id]);

    }
}
