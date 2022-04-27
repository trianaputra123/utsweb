@extends('layout.v_template')
@section('title','Info Sewa')

@section('content')
    <a href="/Infosewa/add" class="btn btn-primary btn-sm">Add</a> <br>
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> success!</h4>
                {{ session('pesan') }}.
            </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-blue">Id Infosewa</th>
                <th class="bg-blue">Nama Barang</th>
                <th class="bg-blue" >Harga Sewa</th>
                <th class="bg-blue" >Jenis </th>
                <th class="bg-blue" >Foto Produk</th>
                <th class="bg-blue" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($Infosewa as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->harga_sewa }}</td>
                <td>{{ $data->jenis }}</td>
                <td><img src="{{ url('foto_produk/'.$data->foto_produk) }}" width="100px"></td>
                <td>
                    <a href="/Infosewa/detail/{{ $data->id_Infosewa }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/Infosewa/edit/{{ $data->id_Infosewa }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_Infosewa }}">
                Delete
              </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($Infosewa as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_Infosewa }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_barang}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini...?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/Infosewa/delete/{{$data->id_Infosewa}}" class="btn btn-outline">Yes</a>
              </div>
            </div>
@endforeach

@endsection