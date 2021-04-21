@extends('master')
@section('title', 'list')
@section('content')
<h1>List of E-books</h1>
<ul>
    @foreach($list as $list)
    <li>{{ $list }} </li>
    @endforeach
</ul>
<br>
<style>
    table,
    td,
    th {
        border: 1px solid #ddd;
        text-align: left;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 15px;
    }
</style>
<table>
    <tr>
        <th>Title</th>
        <th>ISBN</th>
        <th>Book category</th>
        <th>no of page</th>
    </tr>

    <tr>
        <th>Kafka on the Shore</th>
        <th>1843431106</th>
        <th>Magical realism, fantasy</th>
        <th>505</th>
    </tr>

    <tr>
        <th>Eleanor & Park</th>
        <th>1250012570</th>
        <th>Romance</th>
        <th>333</th>
    </tr>
</table>
@endsection