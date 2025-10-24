<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_barang','merek','harga','stok'];
    public $timestamp   = true;

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
