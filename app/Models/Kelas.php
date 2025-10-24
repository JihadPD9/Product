<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_kelas'];
    public $timestamp   = true;

    public function murid(){
        return $this->hasMany(Murid::class);
    }
}
