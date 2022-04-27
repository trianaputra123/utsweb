@extends('layout.v_template')
@section('title','Detail Infosewa')
@section('content')

<table class="table">
    <tr>
        <th width="50px">Id Infosewa</th>
        <th width="30px">:</th>
        <th>{{$Infosewa->id_Infosewa}}</th>
    </tr>
    <tr>
        <th width="50px">nama_barang</th>
        <th width="30px">:</th>
        <th>{{$Infosewa->nama_barang}}</th>
    </tr>
    <tr>
        <th width="50px">harga_sewa</th>
        <th width="30px">:</th>
        <th>{{$Infosewa->harga_sewa}}</th>
    </tr>
    <tr>
        <th width="50px">Jenis</th>
        <th width="30px">:</th>
        <th>{{$Infosewa->jenis}}</th>
    </tr>
    <tr>
        <th width="50px">foto</th>
        <th width="30px">:</th>
       <th> <img src="{{asset('template')}}/dist/img/bulgogi.png" width="100px"></th>  
    </tr>
    <tr>
            <a href="/Infosewa" class="btn btn-success tbn-sm">Kembali</a>
    </tr>

</table>





@endsection