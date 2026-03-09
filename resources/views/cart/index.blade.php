@extends('layouts.app')

@section('content')

    <h3 class="mb-4">Keranjang Belanja</h3>

    @if (session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @php $grandTotal = 0; @endphp

                @foreach ($cart as $id => $item)
                    @php
                        $total = $item['price'] * $item['quantity'];
                        $grandTotal += $total;
                    @endphp

                    <tr>

                        <td>{{ $item['name'] }}</td>

                        <td>Rp {{ number_format($item['price']) }}</td>

                        <td>{{ $item['quantity'] }}</td>

                        <td>Rp {{ number_format($total) }}</td>

                        <td>

                            <form action="{{ route('cart.remove', $id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Remove
                                </button>

                            </form>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

        <div class="text-end">

            <h4>Total : Rp {{ number_format($grandTotal) }}</h4>

        </div>
    @else
        <div class="alert alert-info">
            Keranjang masih kosong
        </div>
    @endif

@endsection
