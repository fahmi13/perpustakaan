<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">

    <form action="/buku/insert" method="post">
        {{csrf_field()}}
        
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">

        <label>Penulis</label>
        <select name="penulis" class="form-control">
            <option>Pilih Penulis</p>
        @foreach($tabel_penulis as $data_penulis)
            <option value="{{$data_penulis->penulis_id}}">{{$data_penulis->penulis_nama}}</option>
        @endforeach
        </select>

        <label>Penerbit</label>
        <input type="text" class="form-control" name="penerbit">
        
        <input type="submit" value="simpan"> | <a href="/buku"> Batal</a>
    </form>

</div>

@endsection