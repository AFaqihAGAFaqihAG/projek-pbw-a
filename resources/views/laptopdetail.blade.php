<!DOCTYPE html>
<html>
<head>
    <title>Laptop Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 70px;
            background-color: #3f3f97;
            color: #00008b; /* Set text color to white */
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            display: block; /* Center the image */
            margin-left: auto;
            margin-right: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #3f3f97;
            background-color: #e1aeae;
        }

        th {
            background-color: #fff;
        }

        div {
            margin-top: 20px;
            background-color: #e1aeae;
            border: 1px solid #3f3f97;
            padding: 50px;
        }

        div h3 {
            margin-bottom: 10px;
        }


/* Optional styles for additional HTML elements and scripts can be added here */

    </style>
</head>
<body>
    <img src="{{ asset('images/' . $laptop->image_path) }}" alt="Laptop Image">

    <table>
        <tr>
            <th>Brand</th>
            <td>{{ $laptop->brand }}</td>
        </tr>
        <tr>
            <th>Model</th>
            <td>{{ $laptop->model }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>Rp {{ number_format($laptop->price, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Processor</th>
            <td>{{ $laptop->processor }}</td>
        </tr>
        <tr>
            <th>Memory</th>
            <td>{{ $laptop->ram }}</td>
        </tr>
        <tr>
            <th>Storage</th>
            <td>{{ $laptop->storage }}</td>
        </tr>
        <tr>
            <th>Display Size</th>
            <td>{{ $laptop->display_size }}</td>
        </tr>
        <tr>
            <th>Port</th>
            <td>{{ $laptop->port }}</td>
        </tr>
        <tr>
            <th>Operating System</th>
            <td>{{ $laptop->operating_system }}</td>
        </tr>
        <tr>
            <th>Weight</th>
            <td>{{ number_format($laptop->weight, 3, ',', '.') }} kg</td>
        </tr>
    </table>

    <div>
        <h3>Description</h3>
        <p>{{ $laptop->description }}</p>
    </div>

    <!-- Add your other HTML elements and scripts here -->
</body>
</html>