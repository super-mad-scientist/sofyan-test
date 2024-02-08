<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggotas = array(
            ['name' => 'Triasih Astuti', 'no_hp' => '08534634633', 'email' => 'triasih@gmail.com', 'address' => 'Banguntapan, Bantul, Daerah Istimewa Yogyakarta'],
            ['name' => 'Agus Jumadi', 'no_hp' => '08534634633', 'email' => 'agus@gmail.com', 'address' => 'Banguntapan, Bantul, Daerah Istimewa Yogyakarta'], 
            ['name' => 'Syifa Khasanah', 'no_hp' => '08534634633', 'email' => 'syifa@gmail.com', 'address' => 'Banguntapan, Bantul, Daerah Istimewa Yogyakarta'],  
            ['name' => 'Raya Abadi', 'no_hp' => '08534634633', 'email' => 'raya@gmail.com', 'address' => 'Banguntapan, Bantul, Daerah Istimewa Yogyakarta'], 
         );
        Anggota::insert($anggotas);
    }
}
