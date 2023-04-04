<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head></head>
<body>
    <a href = "{{ url('') }}">Back</a>
    <a href = "{{ route('addnewdata') }}">Add new data</a>
</body>