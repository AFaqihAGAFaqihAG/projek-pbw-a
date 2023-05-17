<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #3f3f97;
        }

        a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            padding: 8px 16px;
            background-color: ##e1aeae;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e1aeae;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .box {
            width: 300px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #525297;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .box span {
            display: block;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .box .content {
            text-align: center;
        }

        .box h3 {
            margin-bottom: 5px;
        }

        .box p {
            margin: 5px 0;
        }

    </style>
</head>
<body>
    <a href="{{ url('') }}">Back</a>
    <a href="{{ route('addnewdata') }}">Add new data</a>
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
                        <h3>{{ $item->model }}</h3>
                        <p>Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <p>{{ $item->processo }}</p>
                        <p>{{ $item->ram }}</p>
                        <p>{{ $item->storage }}</p>
                        <p>{{ $item->port }}</p>
                        <p>{{ number_format($item->weight/1000, 3, ',', '.') }} kg</p>
                    </div>
                </div>
            </a>
            @php
                $counter++;
            @endphp
        @endforeach
    </div>
</body>
</html>