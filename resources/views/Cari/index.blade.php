@extends('template')




@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Mevcut Cariler</h5>
            <a href="{{route('cari.create')}}" class="btn btn-success btn-mini">Cari Ekle</a>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Cari No</th>
                    <th>Cari Adı</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cariler as $cari)
                    <tr class="gradeX">
                        <td>{{$cari->id}}</td>
                        <td>{{$cari->c_adi}}</td>
                        <td class="center"><a href="{{route('cari.edit',$cari->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>


                        <td class="center">

                            <a href="{{route('cari.delete',$cari->id)}}" class="btn btn-danger btn-mini">Sil</a>

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
