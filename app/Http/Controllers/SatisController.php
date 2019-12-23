<?php

namespace App\Http\Controllers;

use App\Cari;
use App\Komponent;
use App\Pano;
use App\Satis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satislar = DB::select('SELECT satis.id,cari.c_adi, pano.p_adi, satis.s_adet,satis.i_orani,satis.t_tutar,satis.t_satistutari from pano,satis,cari where satis.p_id=pano.id AND
									satis.c_id = cari.id');
        return view('satis.index',compact('satislar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panolar = Pano::all();
        $cariler = Cari::all();
        $satislar = Satis::all();
        return view('satis.create',compact('satislar','cariler','panolar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $maliyet = DB::select('select (komponent.fiyat*birim.deger*panokomp.adet) AS maliyet  
                                        from panokomp,komponent,birim,pano 
                                        WHERE panokomp.komp_id = komponent.id AND
                                        birim.b_id = komponent.p_birim_id AND
                                        pano.id = panokomp.pano_id AND 
                                        pano.id = :id
                                        GROUP BY pano.id',['id' => $request->pano]);

        $kar_orani = DB::select('select pano.p_kar from pano where pano.id = :id',['id' => $request->pano]);
        echo($kar_orani[0]->p_kar * $maliyet[0]->maliyet );
        $satis = new Satis();
        $satis->p_id = $request->pano;
        $satis->c_id = $request->cari;
        $satis->i_orani= $request->i_orani;
        $satis->s_adet = $request->adet;
        $satis->s_fiyat = ($kar_orani[0]->p_kar * $maliyet[0]->maliyet)/100 + $maliyet[0]->maliyet;
        $satis->t_tutar = $request->adet*$satis->s_fiyat;
        if($request->i_orani !=null){
            $satis->t_satistutari =$satis->t_tutar - ($satis->t_tutar * $request->i_orani)/100;
        }else{
            $satis->t_satistutari = $satis->t_tutar;
        }
        $satis->save();
        $this->stokdus($request);
       // $panoKomp = PanoKo
        if ($satis){

            alert()
                ->success('Başarılı', 'Satış İşlemi Gerçekleşti')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Satış İşlemi Gerçekleştirilemedi')
                ->autoClose(2000);
            return back();
        }
    }
    public function stokdus(Request $request){

             $malzemeler = DB::select('select (komponent.stok-(panokomp.adet*'.$request->adet.')) as kalan from panokomp,komponent where panokomp.pano_id =:id AND komponent.id=panokomp.komp_id',['id'=>$request->pano]);
              $idler = DB::select('select panokomp.komp_id from panokomp where panokomp.pano_id =:id',['id'=>$request->pano]);
                for ($i=0;$i<count($malzemeler);$i++) {

                    $komponent = Komponent::find($idler[$i]->komp_id);
                    $komponent->stok =$malzemeler[$i]->kalan;
                    $komponent->save();
                }
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
        $satis = Satis::find($id);
        $cariler = Cari::all();
        $panolar = Pano::all();
        return view('satis.edit',compact('satis','cariler','panolar'));
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
        $satis = Satis::find($id);

        if($request->i_orani !=$satis->i_orani || $request->adet !=$satis->s_adet){
        $maliyet = DB::select('select (komponent.fiyat*birim.deger*panokomp.adet) AS maliyet  
                                        from panokomp,komponent,birim,pano 
                                        WHERE panokomp.komp_id = komponent.id AND
                                        birim.b_id = komponent.p_birim_id AND
                                        pano.id = panokomp.pano_id AND 
                                        pano.id = :id
                                        GROUP BY pano.id',['id' => $request->pano]);

        $kar_orani = DB::select('select pano.p_kar from pano where pano.id = :id',['id' => $request->pano]);
        $satis->p_id = $request->pano;
        $satis->c_id = $request->cari;
        $satis->i_orani= $request->i_orani;
        $satis->s_adet = $request->adet;
        $satis->s_fiyat = ($kar_orani[0]->p_kar * $maliyet[0]->maliyet)/100 + $maliyet[0]->maliyet;
        $satis->t_tutar = $request->adet*$satis->s_fiyat;
        if($request->i_orani !=null){
            $satis->t_satistutari =$satis->t_tutar - ($satis->t_tutar * $request->i_orani)/100;
        }else{
            $satis->t_satistutari = $satis->t_tutar;
        }
        $satis->save();
        // $panoKomp = PanoKo
        if ($satis){

            alert()
                ->success('Başarılı', 'Satış Güncelleme İşlemi Gerçekleşti')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Satış Güncelleme İşlemi Gerçekleştirilemedi')
                ->autoClose(2000);
            return back();
        }
        }else{
            $satis->p_id = $request->pano;
            $satis->c_id = $request->cari;
            $satis->save();
            if ($satis){

                alert()
                    ->success('Başarılı', 'Satış Güncelleme İşlemi Gerçekleşti')
                    ->autoClose(2000);
                return back();

            } else {
                alert()
                    ->error('Hata', 'Satış Güncelleme İşlemi Gerçekleştirilemedi')
                    ->autoClose(2000);
                return back();
            }
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
        //
    }
}
