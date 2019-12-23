@extends('template')


@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Cari Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="{{route('cari.store')}}" method="POST" class="form-horizontal" id="ajax-form">
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Cari Adı</label>
                            <div class="controls">
                                <input type="text" class="span11" name="adi" value=""/>
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Cari Ekle</button>
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
