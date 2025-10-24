<?php

use App\Models\Hobi;
use App\Models\Wali;
use App\Models\Siswa;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/about', function (){
    return 'Selamat Datang di Halaman About';
});

route::get('/profile', function (){
    return 'Selamat Datang di Halaman Profile';
});

route::get('/biodata/{NamaLengkap}/{TanggalLahir}/{JenisKelamin}/{TempatLahir}/{Alamat}/{Agama}/{Telepon}', function ($NamaLengkap,$TanggalLahir,$JenisKelamin,$TempatLahir,$Alamat,$Agama,$Telepon){
    return '<h1>Biodata</h1><br>' .
            "Nama Lengkap : $NamaLengkap<br>" .
            "Tanggal Lahir : $TanggalLahir<br>" .
            "Jenis Kelamin : $JenisKelamin<br>" .
            "Tempat Lahir : $TempatLahir<br>" .
            "Alamat : $Alamat<br>" .
            "Agama : $Agama<br>" . 
            "Telepon : $Telepon<br>"; 
});

route::get('/hitung/{Bilangan1}/{Bilangan2}', function($Bilangan1,$Bilangan2){
    $Hasil = $Bilangan1 + $Bilangan2;
    return "Bilangan 1 : $Bilangan1<br>" . 
            "Bilangan 2 : $Bilangan2<br>" . 
            "Hasil : $Hasil";
});

//persegi
route::get('/persegi/{sisi}',function($sisi){
    $hasil = $sisi * $sisi;
    return "Sisi : $sisi<br> " . 
            "Luas Persegi : $hasil ";
});

//persegi panjang
route::get('/persegipanjang/{panjang}/{lebar}',function($panjang,$lebar){
    $hasil = $panjang * $lebar;
    return "Panjang : $panjang<br> " . 
            "Lebar : $lebar<br>" . 
            "Luas Persegi Panjang : $hasil";
});

//segitiga
route::get('/segitiga/{alas}/{tinggi}',function($alas,$tinggi){
    $hasil = 0.5 * $alas * $tinggi;
    return "Rumus : 1/2 x alas x tinggi<br>" . 
            "Alas : $alas<br> " . 
            "Tinggi : $tinggi<br>" . 
            "Luas Segitiga : $hasil ";
});

//lingkaran
route::get('/lingkaran/{jarijari}',function($jarijari){
    $hasil = 3.14 * $jarijari * $jarijari;
    return "Rumus = L = π x r²<br>" .
            "Jari Jari : $jarijari<br> " . 
            "Luas Persegi : $hasil ";
});


route::get('assalaamcoffe/{namapemesanan}/{notelp}/{tanggalbeli}/{jenis}/{menu}/{jumlah}',function($namapemesanan,$notelp,$tanggalbeli,$jenis,$menu,$jumlah){

    if ($jenis == "makanan") {
        if ($menu == "seblak") {
            $harga =10000;
        }elseif ($menu == "pentol") {
            $harga =15000;
        }elseif ($menu == "batagor") {
            $harga = 20000;
        }else {
            $harga = 0;
        }
    }elseif ($jenis == "minuman") {
        if ($menu == "kopi") {
            $harga =5000;
        }elseif ($menu == "jus") {
            $harga =10000;
        }elseif ($menu == "thai tea") {
            $harga = 15000;
        }else {
            $harga = 0;
        }
    }
    

    $total = $harga * $jumlah;
    
    
    if ($total > 50000) {
        $diskon = $total*0.1;      
    }else {
        $diskon = 0;
    }
    $total_bayar = $total - $diskon;

    return "<h2>~Assalaam Coffe~</h2><br>" . 
            "===========================<br>" . 
            "Nama Pemesanan : $namapemesanan<br>" . 
            "No telepon : $notelp<br>" . 
            "Tanggal Beli : $tanggalbeli<br>" . 
            "Jenis : $jenis<br>" . 
            "Menu : $menu<br>" . 
            "Harga : $harga<br>" . 
            "Jumlah : $jumlah<br>" . 
            "---------------------------<br>" . 
            "Total : $total<br>" . 
            "Diskon 10% : $diskon<br>" . 
            "---------------------------<br>" . 
            "Total Bayar : $total_bayar";
});
route::get('halaman1', function (){

    $siswa = ["Jihad","Ilman","Radit","Rakha","Davin","Fakhri","Rehan","Fadil","Jauf","Gadi"];
    return view('tampil1', compact('siswa'));
});

route::get('halaman2', function (){

    $hobi = ["Futsal","Karate","Basket","Mancing","Tidur","Makan","Minum","Game","Tekwondo","Mukbang"];
    return view('tampil2', compact('hobi'));
});

route::get('halaman3', function (){

    $idola = ["windah","miawaug","sahroni","sule","andre","romo","ajis","tanboy kun","irfan","bagas dribel"];
    return view('tampil3', compact('idola'));
});

// route::get('post',[PostsController::class,'tampil']);

route::get('siswa',function (){

    $siswa = Siswa::all();
    return view('halaman_siswa', compact('siswa'));

});

// route::get('biodata',[BiodatasController::class,'tampil']);

#Menampilkan semua data
    //return $post = Post::all();

    #Menampilkan data tertentu
    //return $post = Post::where('title','like','%tips%')->get();

    #Merubah data
    //$post            = Post::find(1);
    //$post->content   = "Belajar dengan giat";
    //$post->save();
    //return $post;

    #Menghapus data
    //$post   = Post::find(1);
    //$post->delete();
    //return $post;

    #Menambahkan data
    //$post           = new Post;
    //$post->title    = "menjadi teman yang baik";
    //$post->content  = "menjadi teman yang baik adalah hal positif";
    //$post->save();
    //return $post;

    //return view('halaman_post', compact('post'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('product',[ProductController::class, 'index']);
route::get('product/add', [ProductController::class, 'store']);
route::get('product/update', [ProductController::class, 'update']);
route::get('product/delete', [ProductController::class, 'destroy']);

// Crud
route::resource('post',PostsController::class);
route::resource('biodata',BiodatasController::class);


//Route Relasi
Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);

//Mini Tugas One To One
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

//Mini Tugas One To Many
Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

//Mini Tugas Many To Many
Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});

//Tugas Akhir
Route::get('eloquent', [RelasiController::class, 'eloquent']);


//Crud Relasi One To One
route::resource('pengguna',PenggunaController::class);
route::resource('telepon',TeleponController::class);

//Crud Relasi One To Many
route::resource('kelas',KelasController::class);
route::resource('murid',MuridController::class);

//Crud Relasi Many To Many
route::resource('barang',BarangController::class);
route::resource('pembeli',PembeliController::class);
route::resource('transaksi',TransaksiController::class);
