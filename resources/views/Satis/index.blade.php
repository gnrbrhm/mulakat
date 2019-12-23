@extends('template')


@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Mevcut Panolar</h5>
            <a href="{{route('satis.create')}}" class="btn btn-success btn-mini">Satış Yap</a>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Satış No</th>
                    <th>Cari Adı</th>
                    <th>Pano Adı</th>
                    <th>Satış Adeti</th>
                    <th>İndirim Oranı</th>
                    <th>Toplam Tutar</th>
                    <th>Satış Tutar</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($satislar as $satis)
                    <tr class="gradeX">
                        <td>{{$satis->id}}</td>
                        <td>{{$satis->c_adi}}</td>
                        <td>{{$satis->p_adi}}</td>
                        <td>{{$satis->s_adet}}</td>
                        <td>{{$satis->i_orani}}</td>
                        <td>{{$satis->t_tutar}}</td>
                        <td>{{$satis->t_satistutari}}</td>
                        <td class="center"><a href="{{route('satis.edit',$satis->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>


                        <td class="center">

                            <a href="{{route('satis.delete',$satis->id)}}" class="btn btn-danger btn-mini">Sil</a>

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
