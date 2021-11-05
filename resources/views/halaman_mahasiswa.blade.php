<a href="/project_website/public/tambah">Tambah</a>
<a href="/project_website/public/cetakword">Cetak Word</a>
<a href="/project_website/public/cetakexcel">Cetak Excel</a>
<a href="/project_website/public/grafik">Cetak Grafik</a>
<a href="/project_website/public/cetakpdf">Cetak PDF</a>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Program Studi</th>
<th>Opsi</th>
</tr>
@foreach($mahasiswa as $d_m)
<tr>
<td>{{ $d_m->nim }}</td>
<td>{{ $d_m->nama }}</td>
<td>{{ $d_m->alamat }}</td>
<td>{{ $d_m->program_studi }}</td>
<td>
<a href="/project_website/public/ubah/{{$d_m->nim }}">
Ubah</a>
|
<a href="/project_website/public/hapus/{{$d_m->nim }}">
Hapus</a>

</td>
</tr>
@endforeach
</table>
