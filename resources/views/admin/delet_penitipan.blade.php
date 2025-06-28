<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Penitipan - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Data Penitipan Barang</h2>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Data --}}
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Nama Pemilik</th>
                <th>Tanggal Titip</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($penitipans as $index => $penitipan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $penitipan->nama_barang }}</td>
                <td>{{ $penitipan->pemilik }}</td>
                <td>{{ $penitipan->tanggal_titip }}</td>
                <td>
                    <form action="{{ route('penitipan.destroy', $penitipan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data penitipan tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
