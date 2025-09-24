<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Siswa;
use App\Http\Controllers\BiodatasController;

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

route::get('post',[PostsController::class,'tampil']);

route::get('siswa',function (){

    $siswa = Siswa::all();
    return view('halaman_siswa', compact('siswa'));

});

route::get('biodata',[BiodatasController::class,'tampil']);

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

route::get('product',[ProductController::class, 'index'])->name('product');
