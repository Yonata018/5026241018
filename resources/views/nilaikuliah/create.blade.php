@extends('template')
@section('title', 'Tambah Nilai Kuliah')
@section('konten')

    <h2>Tambah Nilai Kuliah</h2>

    <form action="{{ route('nilaikuliah.store') }}" method="POST">
        @csrf
        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" maxlength="6">
        </p>
        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka">
        </p>
        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS">
        </p>
        <button type="submit">Simpan</button>
        <a href="{{ route('nilaikuliah.index') }}">Kembali</a>
    </form>
@endsection