<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder {
    public function run(): void {
        $data = [
            // Supplier 1: Indomarco (Makanan/Minuman)
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'IDM01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'IDM02', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'IDM03', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'IDM04', 'barang_nama' => 'Teh Kotak', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'IDM05', 'barang_nama' => 'Sari Roti', 'harga_beli' => 5000, 'harga_jual' => 7000],
            // Supplier 2: Unilever (Kebersihan/Kesehatan)
            ['barang_id' => 6, 'kategori_id' => 4, 'barang_kode' => 'UNI01', 'barang_nama' => 'Rinso Bubuk', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'UNI02', 'barang_nama' => 'Sunlight', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'UNI03', 'barang_nama' => 'Pepsodent', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'UNI04', 'barang_nama' => 'Lifebuoy Cair', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'UNI05', 'barang_nama' => 'Molto Softener', 'harga_beli' => 12000, 'harga_jual' => 15000],
            // Supplier 3: Wings (Campuran)
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'WNG01', 'barang_nama' => 'So Klin Lantai', 'harga_beli' => 9000, 'harga_jual' => 12000],
            ['barang_id' => 12, 'kategori_id' => 1, 'barang_kode' => 'WNG02', 'barang_nama' => 'Mie Sedaap Goreng', 'harga_beli' => 2400, 'harga_jual' => 2900],
            ['barang_id' => 13, 'kategori_id' => 2, 'barang_kode' => 'WNG03', 'barang_nama' => 'Floridina', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'WNG04', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'WNG05', 'barang_nama' => 'Ember Plastik', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ];
        DB::table('m_barang')->insert($data);
    }
}