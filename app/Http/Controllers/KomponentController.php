<?php

namespace App\Http\Controllers;

use App\Birim;
use App\Komponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KomponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komponents = DB::table('komponent')
            ->leftJoin('birim', 'komponent.p_birim_id', '=', 'birim.b_id')
            ->get();
        return view('siparis.siparisview',compact('komponents'));
    }
    public function ekle(Request $request){
        $komp =  new Komponent();
        $komp->adi =  $request->adi;
        $komp->fiyat =  $request->fiyat;
        $komp->stok =  $request->stok;
        $komp->p_birim_id =  $request->p_birimi;
        $komp->save();
        if ($komp) {

            alert()
                ->success('Başarılı', 'Komponent Eklendi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Komponent Eklenemedi')
                ->autoClose(2000);
            return back();
                    }

            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $birimler = Birim::all();
        return view('siparis.komponentekle',compact('birimler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komp = Komponent::find($id);
        $tumkomponentler = Komponent::all();
        $birimler = Birim::all();
        return view('siparis.edit',compact('komp','tumkomponentler','birimler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sect_Komp = Komponent::find($id);
        $sect_Komp->adi = $request->adi;
        $sect_Komp->fiyat = $request->fiyat;
        $sect_Komp->stok = $request->stok;
        $sect_Komp->save();
        if ($sect_Komp) {

            alert()
                ->success('Başarılı', 'Komponent Düzenlendi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Komponent Düzenlenmedi')
                ->autoClose(2000);
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komponent = Komponent::destroy($id);
        $komponents = Komponent::all();
        if ($komponent) {

            alert()
                ->success('Başarılı', 'Komponent Başarıyla Silindi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Komponent Silinemedi')
                ->autoClose(2000);
            return back();
        }
    }
}
