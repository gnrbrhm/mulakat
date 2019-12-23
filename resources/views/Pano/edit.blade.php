@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Komponent Düzenle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('pano.update',$pano->id)}}" method="POST" class="form-horizontal"  id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Komponent Adı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adi" value="{{$pano->p_adi}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Komponent Fiyat</label>
                            <div class="controls">
                                <input type="text" class="span11" name="kar" value="{{$pano->p_kar}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pano Maliyet</label>
                            <div class="controls">
                                <input type="text" class="span11" name="maliyet" value=""/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Pano Düzenle</button>
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
