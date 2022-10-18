<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama_jurusan' => 'Meteorologi (ME)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '50',
            'fakultas' => 'Fakultas Ilmu dan Teknologi Kebumian',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 1
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Sistem dan Teknologi Informasi (II)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '67',
            'fakultas' => 'Sekolah Teknik Elektro dan Informatika (STEI)',
            'prospek_kerja' => 'Organisasi pemerintah, Organisasi profit (BUMN dan swasta), Industri perangkat lunak, Institusi pendidikan untuk memenuhi kebutuhan peneliti dan tenaga pengajar',
            'kampus_id' => 1
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Meteorologi (ME)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '54',
            'fakultas' => 'Fakultas Ilmu dan Teknologi Kebumian',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 2
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Sistem dan Teknologi Informasi (II)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '70',
            'fakultas' => 'Sekolah Teknik Elektro dan Informatika (STEI)',
            'prospek_kerja' => 'Organisasi pemerintah, Organisasi profit (BUMN dan swasta), Industri perangkat lunak, Institusi pendidikan untuk memenuhi kebutuhan peneliti dan tenaga pengajar',
            'kampus_id' => 3
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Meteorologi (ME)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '58',
            'fakultas' => 'Fakultas Ilmu dan Teknologi Kebumian',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 3
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Tenaga Listrik (EP)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '77',
            'fakultas' => 'Sekolah Teknik Elektro dan Informatika (STEI)',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 3
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Elektro (EL)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '80',
            'fakultas' => 'Sekolah Teknik Elektro dan Informatika (STEI)',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 4
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Biologi (BI)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '90',
            'fakultas' => 'Sekolah Ilmu dan Teknologi Hayati (SITH)',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 4
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Meteorologi (ME)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '59',
            'fakultas' => 'Fakultas Ilmu dan Teknologi Kebumian',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 5
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Farmasi Klinik dan Komunitas (FKK)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '97',
            'fakultas' => 'Sekolah Farmasi (SF)',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 5
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Manajemen (MB)',
            'akreditasi' => 'A',
            'deskripsi' => '-',
            'kuota_mahasiswa_baru' => '104',
            'fakultas' => 'Sekolah Bisnis dan Manajemen (SBM)',
            'prospek_kerja' => 'Instansi Pemerintahan, Akademisi, Peneliti, Pertanian, Industri',
            'kampus_id' => 5
        ]);
    }
}
