@extends('layout.v_template')
@section('title','Add Infosewa')

@section('content')

<form action="/Infosewa/insert" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Infosewa</label>
                    <input name="id_Infosewa" class="form-control" value="{{ old('id_Infosewa') }}">
                    <div class="text-danger">
                        @error('id_Infosewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                    <div class="text-danger">
                        @error('nama_barang')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                    <div class="text-danger">
                        @error('harga_sewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis</label>
                    <input name="jenis" class="form-control" value="{{ old('jenis') }}">
                    <div class="text-danger">
                        @error('jenis')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Produk</label>
                    <input name="foto_produk" class="form-control" value="{{ old('foto_produk') }}">
                    <div class="text-danger">
                        @error('ttl')
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