<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">

    @foreach($data_row as $data_value)
    <form action="/user/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$data_value->id}}">
        
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$data_value->name}}">

        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{$data_value->email}}">

        <label>Password</label>
        <input type="password" class="form-control" name="password">
        
        <label>Level</label>
        <select name="level" class="form-control">
            <option>Pilih Level</p>
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>

        <input type="submit" value="update"> | <a href="/user"> Batal</a>
    </form>
    @endforeach

</div>

@endsection