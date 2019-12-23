@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Pano Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('pano.store')}}" method="POST" class="form-horizontal" id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Pano Adı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adi" value=""/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Pano Kar Marjı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="kar" value=""/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pano Maliyet</label>
                            <div class="controls">
                                <input type="text" class="span11" name="maliyet" value=""/>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <fieldset>
                                    <legend>Pano Komponentleri</legend>
                                    @foreach($komponentler as $komponent)

                                    <input type="checkbox" name="komponents[]" value="{{$komponent->id}}">{{$komponent->adi}}</br>
                                        <div class="control-group">
                                            <label class="control-label">Adet</label>
                                        <div class="controls">
                                        <input type="number" name="adetler[]" />
                                        </div>
                                        </div>
                                    @endforeach

                                </fieldset>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Pano Ekle</button>
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
