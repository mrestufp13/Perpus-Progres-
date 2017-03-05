<?php

use Illuminate\Database\Seeder;

class CreateBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //delete users table records
         DB::table('bukus')->delete();
         //insert some dummy records
         DB::table('bukus')->insert(array(
             array('id_buku'=>'87542385','judul'=>'queque','penerbit'=>'Ninga',
                   'pengarang'=>'dadang','rak'=>'3'),
             
             array('id_buku'=>'87542386','judul'=>'badas','penerbit'=>'dadad',
                   'pengarang'=>'koes','rak'=>'4'),
             
             array('id_buku'=>'87542389','judul'=>'loker','penerbit'=>'dani',
                   'pengarang'=>'nuri','rak'=>'5'),
            
          ));
    }
}
