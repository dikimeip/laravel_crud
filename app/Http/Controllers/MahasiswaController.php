<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$data = mahasiswa::all();
    	return view('home',compact('data'));
    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function do_tambah(Request $requst)
    {
    	$this->validate($requst,[
    		'nim' => 'required',
    		'nama' => 'required',
    		'kelas' => 'required',
    		'alamat' => 'required',
    		'jurusan' => 'required'
    	]);

    	mahasiswa::create([
    		'nim' => $requst->nim,
    		'nama' => $requst->nama,
    		'kelas' => $requst->kelas,
    		'alamat' => $requst->alamat,
    		'jurusan' => $requst->jurusan,
    	]);

    	return redirect('/');
    }

    public function edit($id)
    {
    	$dt = mahasiswa::find($id);
    	return view('edit',compact('dt'));
    }

    public function doedit($id ,Request $requst)
    {	
    	$mahasiswa = mahasiswa::find($id);
    	$mahasiswa->nama = $requst->nama;
    	$mahasiswa->kelas = $requst->kelas;
    	$mahasiswa->alamat = $requst->alamat;
    	$mahasiswa->jurusan = $requst->jurusan;
    	$mahasiswa->save();

    	return redirect('/');

    }

    public function hapus($id)
    {
    	$mahasiswa = mahasiswa::find($id);
    	$mahasiswa->delete();
    	return redirect('/');
    }
}
