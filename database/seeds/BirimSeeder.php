<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('birim')->truncate();
        DB::table('birim')->insert(['b_adi'=>'Dolar','deger'=>'5.94']);
        DB::table('birim')->insert(['b_adi'=>'Euro','deger'=>'6.64']);
        DB::table('birim')->insert(['b_adi'=>'TL','deger'=>'1']);

    }
}
