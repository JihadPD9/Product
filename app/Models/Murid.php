<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tanggal_lahir','tempat_lahir','agama','alamat','email','id_kelas'];
    public $timestamp   = true;

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas');
    }
}
