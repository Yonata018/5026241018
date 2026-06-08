@extends('template')
@section('title', 'Tambah Belanja')
@section('konten')

    <h2>Form Beli Barang</h2>

    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="text" name="Jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga per Item</label>
            <input type="text" name="Harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection