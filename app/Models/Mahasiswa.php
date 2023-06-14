<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table='mahasiswa';
    protected $primaryKey='Nim';
    protected $guarded=['id'];
    // protected $fillabel=[
    //     'Nim',
    //     'Nama',
    //     'Kelas',
    //     'Jurusan',
    //     'No_Handphone',
    // ];
}
