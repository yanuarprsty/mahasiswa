<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Jenis Kelamin</th>
<th>Semester</th>
<th>Alamat</th>

</tr>
@foreach($utsmhs as $u_m)
<tr>
<td>{{ $u_m->nim }}</td>
<td>{{ $u_m->nama }}</td>
<td>{{ $u_m->jurusan}}</td>
<td>{{ $u_m->jenis_kelamin}}</td>
<td>{{ $u_m->semester}}</td>
<td>{{ $u_m->alamat}}</td>
</tr>
@endforeach
</table>