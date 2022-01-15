//views/post/index.blade.php

@extends('layouts.app')

@section('title', 'Semua Post')

<style>
table,
td {
    border: 1px solid #333;
    text-align:center;
}

thead,
tfoot {
    background-color: #222;
    color: #fff;
}
th{
  width: 50%; 
}
button{
    background-color: #ff5346;
    color: #fff;
    border: none;
    border-radius: 2px;
}

</style>
@section('content')
<table>
Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
    <thead>
        <tr>
            <th colspan="3">Semua Post</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title}}</td>
            <td>{{ $post->body }}</td> 
        </tr>
      @endforeach
    </tbody>
</table> 
