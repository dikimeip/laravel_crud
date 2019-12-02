<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<a href="{{route('mahasiswa.tambah')}}">TAMBAH DATA</a>
<body>
	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>ALAMAT</th>
			<th>JURUSAN</th>
			<th>AKSI</th>
		</tr>
		 @foreach ($data as $dt)
		<tr>
			<td>{{$dt->nim}}</td>
			<td>{{$dt->nama}}</td>
			<td>{{$dt->kelas}}</td>
			<td>{{$dt->alamat}}</td>
			<td>{{$dt->jurusan}}</td>
			<td>
				<a href="{{route('mahasiswa.hapus',$dt->nim)}}" onclick="return confirm('Yakin Dihapus')">HAPUS</a>
				<a href="/tambah/edit/{{$dt->nim}}">EDIT</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>	
</html>