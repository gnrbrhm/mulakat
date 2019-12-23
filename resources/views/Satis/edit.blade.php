@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Satış Düzenle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('satis.update',$satis->id)}}" method="POST" class="form-horizontal" id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Cari</label>
                            <div class="controls">
                                <select name="cari" class="span11">
                                    @foreach($cariler as $cari)
                                        <option value="{{$cari->id}}">{{$cari->c_adi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Pano</label>
                            <div class="controls">
                                <select name="pano" class="span11">
                                    @foreach($panolar as $pano)
                                        <option value="{{$pano->id}}">{{$pano->p_adi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Adet</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adet" value="{{$satis->s_adet}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">İndirim Oranı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="i_orani" value="{{$satis->i_orani}}"/>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Satış Düzenle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
