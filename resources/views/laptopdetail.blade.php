<!-- laptopdetail.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laptop Details</title>
    <!-- Add your CSS stylesheets and other head elements here -->
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
            <td>{{ $laptop->memory }}</td>
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
            <th>Graphics</th>
            <td>{{ $laptop->graphics }}</td>
        </tr>
        <tr>
            <th>Operating System</th>
            <td>{{ $laptop->operating_system }}</td>
        </tr>
        <tr>
            <th>Weight</th>
            <td>{{ number_format($laptop->weight, 3, ',', '.') }} kg</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $laptop->description }}</td>
        </tr>
    </table>
    
    <!-- Add your other HTML elements and scripts here -->
</body>
</html>
