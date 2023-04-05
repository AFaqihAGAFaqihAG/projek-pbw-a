<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link   -->
    @vite('resources/css/style.css')
    <link rel="stylesheet" href="css/style.css">

    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
    <style>
        form div {
            margin-bottom: 10px;
        }
        form label {
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }
        form input[type="text"], form input[type="number"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        form {
            padding: 20px;
            background-color: #f9f9f9;
        }
        form button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }
        form button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">LAPTOP</a>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#services">Services & Support</a>
                <a href="#about">About Us & Privacy Policy</a>
                <a href="#recommended">Recommended</a>
                <a href="#information">Information</a>
                <a href="#review">Review</a>
                <a href="#contact">Contact</a>
                @if (Auth::check())
                    <a href="{{ url('/editdata') }}">Edit</a>
                    <a href="{{ url('') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                @else
                    <a href="{{ url('/editdata') }}">Log in</a>
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <form method="POST" action="{{ route('add_laptop_information') }}">
    @csrf
    <div>
        <p> </p>
    </div>
    <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand">
    </div>
    <div>
        <label for="model">Model:</label>
        <input type="text" name="model" id="model">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
    </div>
    <div>
        <label for="processor">Processor:</label>
        <input type="text" name="processor" id="processor">
    </div>
    <div>
        <label for="memory">Memory:</label>
        <input type="text" name="memory" id="memory">
    </div>
    <div>
        <label for="storage">Storage:</label>
        <input type="text" name="storage" id="storage">
    </div>
    <div>
        <label for="display_size">Display Size:</label>
        <input type="text" name="display_size" id="display_size">
    </div>
    <div>
        <label for="graphics">Graphics:</label>
        <input type="text" name="graphics" id="graphics">
    </div>
    <div>
        <label for="operating_system">Operating System:</label>
        <input type="text" name="operating_system" id="operating_system">
    </div>
    <div>
        <label for="weight">Weight:</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <label for="weight">Description:</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
<a href = "{{ url('') }}">Back</a>
</body>
</html>
