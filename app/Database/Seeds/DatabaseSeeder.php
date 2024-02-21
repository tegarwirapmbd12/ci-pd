<?php

namespace App\Database\Seeds;

use App\Models\InfografiCategories;
use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $infografi_categories = [
            'name' => 'TEMPAT WISATA',
            'name' => 'PERTANIAN',
            'name' => 'INDEKS KEBUTUHAN DATA',
            'name' => 'DATA PEMINJAMAN BUKU',
            'name' => 'JUMLAH ANGKUTAN UMUM',
        ];
        $this->db->table('infografi_categories')->insert($infografi_categories);
    }
}
