<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "matakuliahs";
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_matkul', 'Nama_matkul', 'Nama_Dosen', 'SKS'];

}
