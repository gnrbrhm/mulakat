@extends('template')


@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Mevcut Komponentler</h5>
            <a href="{{route('komponent.ekleview')}}" class="btn btn-success btn-mini">Komponent Ekle</a>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Komponent Adı</th>
                    <th>Stok</th>
                    <th>Fiyat</th>
                    <th>Para Birimi</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($komponents as $komponent)
                    <tr class="gradeX">
                        <td>{{$komponent->adi}}</td>
                        <td>{{$komponent->stok}}</td>
                        <td>{{$komponent->fiyat}}</td>
                        <td>{{$komponent->b_adi}}</td>
                        <td class="center"><a href="{{route('komponent.edit',$komponent->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>


                        <td class="center">

                            <a href="{{route('komponent.sil',$komponent->id)}}" class="btn btn-danger btn-mini">Sil</a>

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
