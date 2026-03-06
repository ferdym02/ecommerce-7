@extends('layouts.app')

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
        Tambah Produk
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Deskripsi</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->description }}</td>
                    <td>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk?')">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        <div class="py-3">
                            <strong>Belum ada produk.</strong><br>
                            Silakan tambahkan produk terlebih dahulu.
                        </div>
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>
@endsection
