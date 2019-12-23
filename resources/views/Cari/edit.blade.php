@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Cari Düzenle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('cari.update',$cari->id)}}" method="POST" class="form-horizontal"  id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Cari Adı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adi" value="{{$cari->c_adi}}"/>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Cari Düzenle</button>
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
