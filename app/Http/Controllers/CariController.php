<?php

namespace App\Http\Controllers;

use App\Cari;
use Illuminate\Http\Request;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cariler = Cari::all();
        return view('cari.index',compact('cariler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komponentler = Cari::all();
        return view('cari.create',compact('komponentler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cari = new Cari();
        $cari->c_adi = $request->adi;
        $cari->save();
        if ($cari){

            alert()
                ->success('Başarılı', 'Cari Eklendi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Cari Eklenemedi')
                ->autoClose(2000);
            return back();
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
        $cari = Cari::find($id);
        return view('cari.edit',compact('cari'));
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
        $cari = Cari::find($id);
        $cari->c_adi = $request->adi;
        $cari->save();
        if ($cari) {

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
        $cari = Cari::destroy($id);
        if ($cari) {

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
