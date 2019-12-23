<?php

namespace App\Http\Controllers;

use App\Komponent;
use App\Pano;
use App\Panokomp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $panolar = DB::select('select pano.id, pano.p_adi, (komponent.fiyat*birim.deger*panokomp.adet) AS maliyet, pano.p_kar  
                                        from panokomp,komponent,birim,pano 
                                        WHERE panokomp.komp_id = komponent.id AND
                                        birim.b_id = komponent.p_birim_id AND
                                        pano.id = panokomp.pano_id GROUP BY
                                         pano.id
 ');

        return view('pano.index',compact('panolar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komponentler = Komponent::all();
        return view('pano.create',compact('komponentler'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pano = new Pano();
        $pano->p_adi = $request->adi;
        $pano->p_kar = $request->kar;
        $pano->p_maliyet = $request->maliyet;
        $pano->save();
        if($pano->save())
            return response()->json(array('success' => true, 'last_insert_id' => $pano->id), 200);
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
        $pano = Pano::find($id);
       // $pano =  App\Pano::where('p_id', $id)->get();
        return view('pano.edit',compact('pano'));
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
        $pano = Pano::find($id);
        $pano->p_adi = $request->adi;
        $pano->p_kar = $request->kar;
        $pano->p_maliyet = $request->maliyet;
        $pano->save();
        if ($pano) {

            alert()
                ->success('Başarılı', 'Pano Güncellendi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Pano Güncellenemedi')
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
        $pano = Pano::destroy($id);
        if ($pano) {

            alert()
                ->success('Başarılı', 'Pano Başarıyla Silindi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Pano Silinemedi')
                ->autoClose(2000);
            return back();
        }
    }
}
