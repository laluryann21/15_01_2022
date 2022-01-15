<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <div class="container">
        <div import_request_variables="Angkatan">
        <div class="row justify-content-center">
    {{-- data mahasiswa --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div import_request_variables="Program Studi">
        <div class="row justify-content-center">
    {{-- data matakuliah </body> --}}
    @livewireScripts
</body>
</html>