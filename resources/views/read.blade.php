@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row mt-5 justify-content-center text-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="{{route('tambah')}}" class="btn btn-primary">tambah data</a>
				</div>
				<div class="card-body">
					<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">nama</th>
			      <th scope="col">email</th>
			      <th scope="col">paket</th>
			      <th scope="col">alamat</th>
			      <th scope="col">pembimbing</th>
			      <th scope="col">tanggal</th>
			      <th scope="col">handle</th>
			    </tr>
			  </thead>
			   @foreach($trains as $train)
			  <tbody>
			    <tr>
			    	<td> {{$train->id}} </td>
			    	<td> {{$train->nama}} </td>
			    	<td> {{$train->email}} </td>
			    	<td> {{$train->paket}} </td>
			    	<td> {{$train->alamat}} </td>
			    	<td> {{$train->pembimbing}} </td>
			    	<td> {{$train->tanggal}} </td>
			    	<td>
			    		<a href="{{route('hapus',$train->id)}}" class="btn btn-danger">delete</a>
			    		<a href="{{route('edit',$train->id)}}" class="btn btn-primary">edit</a>
			    	</td>
			    </tr>
			  </tbody>
			  @endforeach
			</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection