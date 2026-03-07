<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder {
    public function run(): void {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'IDM', 'supplier_nama' => 'PT Indomarco Adi Prima', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'UNI', 'supplier_nama' => 'PT Unilever Indonesia', 'supplier_alamat' => 'Tangerang'],
            ['supplier_id' => 3, 'supplier_kode' => 'WNG', 'supplier_nama' => 'PT Wings Surya', 'supplier_alamat' => 'Surabaya'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}