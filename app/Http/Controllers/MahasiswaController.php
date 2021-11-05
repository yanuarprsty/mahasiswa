<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class MahasiswaController extends Controller
{
  
    public function index()
{
$mahasiswa = DB::table('mahasiswa')->get();
return view('halaman_mahasiswa',['mahasiswa' 
=> $mahasiswa]);


/*$utsmhs = DB::table('utsmhs')->get();
return view('halaman_utsmhs',['utsmhs' 
=> $utsmhs]);*/

}

public function proses_tambah(Request $request)
{
DB::table('mahasiswa')->insert([
'nim' => $request->nim,
'nama' => $request->nama,
'alamat' => $request->alamat,
'program_studi' => $request->program_studi
]);
return redirect('/mahasiswa');
}

public function ubah ($nim)
{
  $mahasiswa = DB::table('mahasiswa')->where('nim',$nim)->get();
  return view('ubah_mahasiswa',['datamahasiswa' => $mahasiswa]);
}

public function proses_ubah(Request $request)
{
DB::table('mahasiswa')->where('nim',$request->id)->update([
'nim' => $request->nim,
'nama' => $request->nama,
'alamat' => $request->alamat,
'program_studi' => $request->program_studi
]);
return redirect('/mahasiswa');
}

public function hapus($nim)
{
DB::table('mahasiswa')->where('nim',$nim)->delete();
return redirect('/mahasiswa');
}

public function cetakword()
{
$mahasiswa = DB::table('mahasiswa')->get();
return view('cetakword',['data_mahasiswa' 
=> $mahasiswa]);
}

public function cetakexcel()
{
$mahasiswa = DB::table('mahasiswa')->get();
return view('cetakexcel',['data_mahasiswa' 
=> $mahasiswa]);
}

public function grafik()
{
$mahasiswa = DB::table('mahasiswa')->get();
foreach($mahasiswa as $d_m){
$label[]= $d_m->nama;
$ipk[]= $d_m->ipk;
}
return view('grafik',compact('label','ipk'));
}

public function cetakpdf()
{
$mahasiswa = DB::table('mahasiswa')->get();
$pdf = PDF::loadview('cetakpdf',['data_mahasiswa'=> $mahasiswa]);
return $pdf->download('laporan_mahasiswa.pdf');
}
}


