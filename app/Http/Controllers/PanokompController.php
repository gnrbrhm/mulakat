<?php

namespace App\Http\Controllers;

use App\Panokomp;
use Illuminate\Http\Request;

class PanokompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pano = new PanoController();
        $response = $pano->store($request);
        $panokomp = new Panokomp();
        $content = $response->getContent();
        $array=json_decode($content,true);

        foreach($request->komponents as $komponent){
            $panokomp = new Panokomp();
            $panokomp->pano_id = $array['last_insert_id'];
            $panokomp->komp_id = $komponent;
            $panokomp->adet = $request->adetler[$komponent-1];
            $panokomp->save();
        }
        if ($panokomp) {

            alert()
                ->success('Başarılı', 'Pano Eklendi')
                ->autoClose(2000);
            return back();

        } else {
            alert()
                ->error('Hata', 'Pano Eklenemedi')
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
        //
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
        //
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
