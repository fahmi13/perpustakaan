<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">
    <a href="user/add">Add</a>    
    <table class="table table-bordered">
    <th>ID</th><th>Nama</th><th>Email</th><th>Level</th><th>Tanggal Input</th><th></th>
    @foreach($tabel_user as $data_user)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data_user->name}}</td>
        <td>{{$data_user->email}}</td>
        <td>{{$data_user->level}}</td>
        <td>{{$data_user->created_at}}</td>
        <td><a href="user/edit/{{$data_user->id}}">Edit</a> | <a href="user/delete/{{$data_user->id}}">Delete</a></td>
    </tr>
    @endforeach
    </table>

    <br>

    Halaman {{$tabel_user->currentPage()}}<br>
    Jumlah Data {{$tabel_user->total()}}<br>
    Data Perhalaman {{$tabel_user->perPage()}}
    {{$tabel_user->links()}}

</div>

@endsection