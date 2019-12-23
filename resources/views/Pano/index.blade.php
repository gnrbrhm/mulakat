@extends('template')


@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Mevcut Panolar</h5>
            <a href="{{route('pano.create')}}" class="btn btn-success btn-mini">Pano Ekle</a>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Pano No</th>
                    <th>Pano Adı</th>
                    <th>Kar Marjı</th>
                    <th>Maliyet</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($panolar as $pano)
                    <tr class="gradeX">
                        <td>{{$pano->id}}</td>
                        <td>{{$pano->p_adi}}</td>
                        <td>{{$pano->p_kar}}</td>
                        <td>{{$pano->maliyet}}</td>
                        <td class="center"><a href="{{route('pano.edit',$pano->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>


                        <td class="center">

                            <a href="{{route('pano.delete',$pano->id)}}" class="btn btn-danger btn-mini">Sil</a>

                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
