@extends('layouts.app')

@section('content')



<div class="container">
  
  <div class="row mt-5 justify-content-center ">
    <div class="col-md-8">
      <form action="{{route('update',$train->id)}}" method="Post">
      @csrf
        <div class="form-group">
          <label for="nama">nama</label>
          <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="name" name="nama" value="{{$train->nama}}">
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="text" class="form-control" id="email" placeholder="email" value="{{$train->email}}" name="email">
        </div>
        <div class="form-group">
          <label for="paket">paket</label>
          <input type="text" class="form-control" id="paket" placeholder="paket" value="{{$train->paket}}" name="paket">
        </div>
        <div class="form-group">
          <label for="alamat">alamat</label>
          <input type="text" class="form-control" id="text" placeholder="alamat" value="{{$train->alamat}}" name="alamat">
        </div>
        <div class="form-group">
          <label for="pembibing">pembibing</label>
          <input type="text" class="form-control" id="text" placeholder="pembibing" value="{{$train->pembimbing}}" name="pembimbing">
        </div>
          <input type="submit" value="edit" class="btn btn-primary">

      </form>
    </div>
  </div>
</div>





@endsection