<?php

use Illuminate\Database\Seeder;

class MahasiswaSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mahasiswa')->insert(
        	[
        		'nim' => 111610122,
        		'nama' => 'Ira Suwandi',
        		'kelas' => '7D',
        		'alamat' => 'Jetis Mojokerto',
        		'jurusan' => 'Teknik Sipil'
        	]);

          DB::table('mahasiswa')->insert(
        	[
        		'nim' => 111610123,
        		'nama' => 'Sukirno',
        		'kelas' => '7D',
        		'alamat' => 'Dawarblandong Mojokerto',
        		'jurusan' => 'Teknik Sipil'
        	]);
    }
}
