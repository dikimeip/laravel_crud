<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
</head>
<body>
<form method="post" action="{{route('mahasiswa.tambah')}}">
	{{csrf_field()}}
	<input type="text" name="nim" placeholder="nim"><br>
	<input type="text" name="nama" placeholder="nama"><br>
	<input type="text" name="kelas" placeholder="kelas"><br>
	<input type="text" name="alamat" placeholder="alamat"><br>
	<input type="text" name="jurusan" placeholder="jurusan"><br>
	<input type="submit" name="simpan">
</form>
</body>
</html>