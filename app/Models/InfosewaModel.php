<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InfosewaModel extends Model
{
    public function allData()
    {
        return DB::table('Infosewa')->get();
    }

    public function detailData($id_Infosewa)
    {
        return DB::table('Infosewa')->where('id_Infosewa', $id_Infosewa)->first();
    }
    public function addData($data)
    {
        DB::table('Infosewa')->insert($data);
    }
    
    public function editData($id_Infosewa, $data)
    {
        DB::table('Infosewa')
            ->where('id_Infosewa', $id_Infosewa)
            ->update($data);
    }

    public function deleteData ($id_Infosewa)
    {
        DB::table ('Infosewa')
            ->where('id_Infosewa', $id_Infosewa)
            ->delete();
    }

}
