@extends('layout.v_template')
@section('title','Edit Info Sewa')

@section('content')

<form action= "/Infosewa/update/{{ $Infosewa->id_Infosewa }}" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Infosewa</label>
                    <input name="id_Infosewa" class="form-control" value="{{ $Infosewa->id_Infosewa }}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $Infosewa->nama_barang }}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input name="harga_sewa" class="form-control" value="{{ $Infosewa->harga_sewa }}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis</label>
                    <input name="jenis" class="form-control" value="{{ $Infosewa->jenis}}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Produk</label>
                    <input name="ttl" class="form-control" value="{{ $Infosewa->foto_produk }}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </div>
    </div>

</form>


@endsection