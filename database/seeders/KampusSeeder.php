<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kampus;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kampus::create([
            'nama_kampus' => 'Institut Teknologi Bandung (ITB)',
            'akreditasi' => 'A',
            'alamat' => 'Jl. Ganesa No.10, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'website' => 'https://www.itb.ac.id/',
            'slug' => 'itb'
        ]);
        Kampus::create([
            'nama_kampus' => 'Institut Teknologi Sepuluh Nopember (ITS)',
            'akreditasi' => 'A',
            'alamat' => 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111',
            'website' => 'https://www.its.ac.id/',
            'slug' => 'its'
        ]);
        Kampus::create([
            'nama_kampus' => 'Institut Teknologi Kalimantan (ITK)',
            'akreditasi' => 'B',
            'alamat' => 'Jl. Soekarno Hatta No.KM 15, Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76127',
            'website' => 'https://www.itk.ac.id/',
            'slug' => 'itk'
        ]);
        Kampus::create([
            'nama_kampus' => 'Universitas Sebelas Maret (UNS)',
            'akreditasi' => 'A',
            'alamat' => ' Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126',
            'website' => 'https://www.uns.ac.id/',
            'slug' => 'uns'
        ]);
        Kampus::create([
            'nama_kampus' => 'Universitas Indonesia (UI)',
            'akreditasi' => 'A',
            'alamat' => 'Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424',
            'website' => 'https://www.ui.ac.id/',
            'slug' => 'ui'
        ]);
        // Kampus::create([
        //     'nama_kampus' => 'Universitas Diponegoro (UNDIP)',
        //     'akreditasi' => '-',
        //     'alamat' => 'Jl. Prof. Sudarto No.13, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275',
        //     'website' => 'https://www.undip.ac.id/',
        //     'slug' => 'undip'
        // ]);
    }
}
