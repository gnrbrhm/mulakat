@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Komponent Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('komponent.ekle')}}" method="POST" class="form-horizontal" onsubmit="return ajaxekle();" id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Komponent Adı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adi" value=""/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Komponent Fiyat</label>
                            <div class="controls">
                                <input type="text" class="span11" name="fiyat" value=""/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Komponent Stok</label>
                            <div class="controls">
                                <input type="text" class="span11" name="stok" value=""/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Para Birimi</label>
                            <div class="controls">
                                <select name="p_birimi" class="span11">
                                    @foreach($birimler as $birim)
                                    <option value="{{$birim->b_id}}">{{$birim->b_adi}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Komponent Ekle</button>
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
