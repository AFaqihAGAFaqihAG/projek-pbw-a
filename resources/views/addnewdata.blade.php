<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/gaya.css')
    <link rel="stylesheet" href="css/gaya.css">
</head>

<body>
    <a href="{{ url('') }}">Back</a>
    <form method="POST" action="{{ route('add_laptop_information') }}" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div style="display: flex; flex-direction: column; gap:10px;">
                <div style="display: flex;">

                    <div style="display: flex; flex-direction: column; gap:10px;">
                        <div>
                            <label for="brand">Brand:</label>
                            <input type="text" name="brand" placeholder="Brand.." id="brand">
                        </div>
                        <div>
                            <label for="model">Model:</label>
                            <input type="text" name="model" placeholder="Model.." id="model">
                        </div>
                        <div>
                            <label for="price">Price:</label>
                            <input type="number" name="price" placeholder="Price.." id="price">
                        </div>
                        <div>
                            <label for="processor">Processor:</label>
                            <input type="text" name="processor" placeholder="Processor.." id="processor">
                        </div>
                        <div>
                            <label for="ram">Ram:</label>
                            <input type="text" name="ram" placeholder="Ram.." id="ram">
                        </div>
                        <div>
                            <label for="storage">Storage:</label>
                            <input type="text" name="storage" placeholder="Storage.." id="storage">
                        </div>

                    </div>
                    <div style="margin-left: 100px; display: flex; flex-direction: column; gap:10px;">
                        <div>
                            <label for="display_size">Display Size:</label>
                            <input type="text" name="display_size" placeholder="Display.." id="display_size">
                        </div>

                        <div>
                            <label for="port">Port:</label>
                            <input type="text" name="port" placeholder="Graphics.." id="port">
                        </div>
                        <div>
                            <label for="operating_system">Operating System:</label>
                            <input type="text" name="operating_system" placeholder="Operating System.."
                                id="operating_system">
                        </div>
                        <div>
                            <label for="weight">Weight:</label>
                            <input type="number" name="weight" placeholder="Weight.." id="weight">
                        </div>
                        <div>
                            <label for="descrption">Description:</label>
                            <input type="text" name="description" placeholder="Description.." id="description">
                        </div>
                    </div>
                </div>
                <div style="margin-left: 10px; margin-top:50px;">
                    <div>
                        <label for="image_path">Masukkan Gambar : </label>
                        <input type="file" name="image_path" id="image_path">
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>

                </div>
            </div>
    </form>
</body>