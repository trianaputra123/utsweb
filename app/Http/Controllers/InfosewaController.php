<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfosewaModel;

class InfosewaController extends Controller
{
    public function __construct()
    {
        $this->InfosewaModel = new InfosewaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'Infosewa' => $this->InfosewaModel->allData(),
        ];
        return view('Infosewa', $data);
    }

    public function detail($id_Infosewa)
    {
        if (!$this->InfosewaModel->detailData($id_Infosewa)) {
            abort(404);
        }
        $data = [
            'Infosewa' => $this->InfosewaModel->detailData(($id_Infosewa)),
        ];
        return view('detailInfosewa', $data);
    }

    public function add()
    {
        return view('addInfosewa');
    }

    public function insert()
    {
        Request()->validate([
            'id_Infosewa' => 'required|unique:Infosewa,id_Infosewa|min:1|max:11',
            'nama_barang' => 'required',
            'harga_sewa' => 'required',
            'jenis' => 'required',
            'foto_produk' => 'required',
        ],[
            'id_Infosewa.required' => 'wajib di isi',
            'id_Infosewa.unique' => 'id_Infosewa sudah ada',
            'id_Infosewa.min' => 'Min 1 Karakter',
            'id_Infosewa.max' => 'Max 11 Karakter',
            'nama_barang.required' => 'wajib di isi',
            'harga_sewa.required' => 'wajib di isi',
            'jenis.required' => 'wajib di isi',
            'foto_produk.required' => 'wajib di isi',
        ]);
        $data =[
            'id_Infosewa' => Request()->id_Infosewa,
            'nama_barang' => Request()->nama_barang,
            'harga_sewa' => Request()->harga_sewa,
            'jenis' => Request()->jenis,
            'foto_produk' => Request()->foto_produk,
        ];

        $this->InfosewaModel->addData($data);
        return redirect()->route('Infosewa')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_Infosewa)
    {
        if (!$this->InfosewaModel->detailData($id_Infosewa)) {
            abort(404);
        }
        $data = [
            'Infosewa' => $this->InfosewaModel->detailData(($id_Infosewa)),
        ];
        return view('editInfosewa', $data);
    }

    public function update($id_Infosewa)
    {
        Request()->validate([
            'id_Infosewa' => 'required|unique:Infosewa,id_Infosewa|min:1|max:11',
            'nama_barang' => 'required',
            'harga_sewa' => 'required',
            'jenis' => 'required',
            'foto_produk' => 'required',
        ],[
            'id_Infosewa.required' => 'wajib di isi',
            'id_Infosewa.unique' => 'id_Infosewa sudah ada',
            'id_Infosewa.min' => 'Min 1 Karakter',
            'id_Infosewa.max' => 'Max 11 Karakter',
            'nama_barang.required' => 'wajib di isi',
            'harga_sewa.required' => 'wajib di isi',
            'jenis.required' => 'wajib di isi',
            'foto_produk.required' => 'wajib di isi',
        ]);
        $data =[
            //'id_Infosewa' => Request()->id_Infosewa,
            'nama_barang' => Request()->nama_barang,
            'harga_sewa' => Request()->harga_sewa,
            'jenis' => Request()->jenis,
            'foto_produk' => Request()->foto_produk,
        ];

        $this->InfosewaModel->editData($id_Infosewa, $data);
        return redirect()->route('Infosewa')->with('pesan','Data Berhasil Di update');
    }

    public function delete($id_Infosewa)
    {
        $this->InfosewaModel->deleteData($id_Infosewa);
        return redirect()->route('Infosewa')->with('pesan','Data Berhasil Di Hapus');
    }
}