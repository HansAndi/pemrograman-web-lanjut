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

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}
