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
        $supplier1 = Supplier::create(['nama_supplier' => 'Adya eka amelia', 'alamat' => 'Kp.Cibedug girang']);
        $supplier2 = Supplier::create(['nama_supplier' => 'Ike Vadilla', 'alamat' => 'Kp. Nusa']);
        $supplier3 = Supplier::create(['nama_supplier' => 'M Fauzil Adhim', 'alamat' => 'Jakarta']);

        // membuat sample buku
        $buku1 = Buku::create(['title' => 'Dilan',
            'stok' => 3, 'jenis' => 'Novel' ,'harga' => 500000, 'supplier_id' => $supplier1->id]);
        $buku2 = Buku::create(['title' => 'Jalan jalan ke bulan',
            'stok' => 2, 'jenis' => 'fiksi' ,'harga' => 750000, 'supplier_id' => $supplier2->id]);
        $buku3 = Buku::create(['title' => 'Mariposa',
            'stok' => 3, 'jenis' => 'Non Fiksi' , 'harga' => 800000, 'supplier_id' => $supplier3->id]);

    }
}
