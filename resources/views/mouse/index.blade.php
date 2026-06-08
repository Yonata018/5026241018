@extends('template')
@section('title', 'Data Mouse')
@section('konten')

    <h2>Data Mouse</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('mouse.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Mouse</th>
            <th>Merk Mouse</th>
            <th>Stock Mouse</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($data as $row)
            <tr>
                <td>{{ $row->kodemouse }}</td>
                <td>{{ $row->merkmouse }}</td>
                <td>{{ $row->stockmouse }}</td>
                <td>{{ $row->tersedia }}</td>
                <td>
                    <a href="{{ route('mouse.edit', $row->kodemouse) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('mouse.destroy', $row->kodemouse) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data mouse.</td>
            </tr>
        @endforelse
    </table>
@endsection