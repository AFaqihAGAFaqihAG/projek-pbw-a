<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
<body>
    <a href="{{ url('') }}">Back</a>
    <a href="{{ route('addnewdata') }}">Add new data</a>
    <div class="box-container">

    <div class="box-container">
        @php
            $laptopList = \App\Models\LaptopInformation::all();
            $counter = 1;
        @endphp

        @foreach($laptopList as $item)
        <a href="{{ route('laptop.details', ['item' => $item]) }}">
                <div class="box">
                    <span>{{ str_pad($counter, 2, '0', STR_PAD_LEFT) }}</span>
                    <img src="{{ asset('images/' . $item->image_path) }}" alt="">
                    <div class="content">
                        <h3 style="text-align: center">{{ $item->model }}</h3>
                        <p style="text-align: center">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <p style="text-align: center">{{ $item->processo }}</p>
                        <p style="text-align: center">{{ $item->ram }}</p>
                        <p style="text-align: center">{{ $item->storage }}</p>
                        <p style="text-align: center">{{ $item->port }}</p>
                        <p style="text-align: center">{{ number_format($item->weight/1000, 3, ',', '.') }} kg</p>
                    </div>
                </div>
            </a>
            @php
                $counter++;
            @endphp
        @endforeach
    </div>

</body>