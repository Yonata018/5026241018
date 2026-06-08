@extends('template')
@section('title', 'Edit Mouse')
@section('konten')

    <h2>Edit Data Mouse</h2>

    <form action="{{ route('mouse.update', $mouse->kodemouse) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Merk Mouse</label><br>
            <input type="text" name="merkmouse" maxlength="30" value="{{ $mouse->merkmouse }}">
        </p>
        <p>
            <label>Stock Mouse</label><br>
            <input type="text" name="stockmouse" value="{{ $mouse->stockmouse }}">
        </p>
        <p>
            <label>Tersedia (Y/N)</label><br>
            <input type="text" name="tersedia" maxlength="1" value="{{ $mouse->tersedia }}">
        </p>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('mouse.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection