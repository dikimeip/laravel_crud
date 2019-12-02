<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
</head>
<body>
<form method="post" action="{{route('mahasiswa.edit',$dt->nim)}}">
	{{method_field('put')}}
	{{csrf_field()}}
	<input type="text" name="nim" placeholder="nim" disabled="" value="{{$dt->nim}}"><br>
	<input type="text" name="nama" placeholder="nama" value="{{$dt->nama}}"><br>
	<input type="text" name="kelas" placeholder="kelas" value="{{$dt->kelas}}"><br>
	<input type="text" name="alamat" placeholder="alamat" value="{{$dt->alamat}}"><br>
	<input type="text" name="jurusan" placeholder="jurusan" value="{{$dt->jurusan}}"><br>
	<input type="submit" name="simpan">
</form>
</body>
</html>