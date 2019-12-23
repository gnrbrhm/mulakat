<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komponent')->truncate();
        DB::table('komponent')->insert(['adi'=>'PVC PANO KARKASI','fiyat'=>'244','stok'=>'20','p_birim_id'=>'3']);
        DB::table('komponent')->insert(['adi'=>'AC UPS','fiyat'=>'30','stok'=>'25','p_birim_id'=>'1']);
        DB::table('komponent')->insert(['adi'=>'DC UPS','fiyat'=>'110','stok'=>'15','p_birim_id'=>'2']);
        DB::table('komponent')->insert(['adi'=>'5A SMPS','fiyat'=>'91','stok'=>'3','p_birim_id'=>'3']);
        DB::table('komponent')->insert(['adi'=>'2.5A SMPS','fiyat'=>'57','stok'=>'10','p_birim_id'=>'3']);
        DB::table('komponent')->insert(['adi'=>'396R PLC','fiyat'=>'175','stok'=>'75','p_birim_id'=>'1']);
        DB::table('komponent')->insert(['adi'=>'42A ANALOG MODÜL','fiyat'=>'130','stok'=>'4','p_birim_id'=>'1']);
        DB::table('komponent')->insert(['adi'=>'MODEM','fiyat'=>'140','stok'=>'10','p_birim_id'=>'1']);

    }
}
