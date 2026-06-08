@extends('template')
@section('title', 'Tambah Mouse')
@section('konten')

    <h2>Tambah Data Mouse</h2>

    <form action="{{ route('mouse.store') }}" method="POST">
        @csrf
        <p>
            <label>Merk Mouse</label><br>
            <input type="text" name="merkmouse" maxlength="30">
        </p>
        <p>
            <label>Stock Mouse</label><br>
            <input type="text" name="stockmouse">
        </p>
        <p>
            <label>Tersedia (Y/N)</label><br>
            <input type="text" name="tersedia" maxlength="1">
        </p>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('mouse.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection