<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head></head>
<body>
    <a href = "{{ url('') }}">Back</a>
    <form method="POST" action="{{ route('add_laptop_information') }}">
    @csrf
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
        <label for="weight">description:</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>