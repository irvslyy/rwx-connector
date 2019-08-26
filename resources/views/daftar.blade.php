@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row mt-5 justify-content-center">
		<div class="col-md-3">
			<div class="card shadow">
				<div class="card-header">
					free
				</div>
				<div class="card-body">
					<ul>
						<li>HTML</li>
						<li>CSS</li>
					</ul>
				</div>
				<div class="card-footer">
					Sanjaya pramuga
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card shadow">
				<div class="card-header">
					PREMIUM
				</div>
				<div class="card-body">
					<ul>
						<li>NODE JS</li>
						<li>MONGO DB</li>
						<li>REACT NATIVE</li>
						<li>C/C++</li>
					</ul>
				</div>
				<div class="card-footer">
					Sandhika Galih
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card shadow">
				<div class="card-header">
					PLATINUM
				</div>
				<div class="card-body">
					<ul>
						<li>ANDROID PROGRAMMING</li>
						<li>ASSEMBLY</li>
						<li>OFFENSIVE SECURITY</li>
					</ul>
				</div>
				<div class="card-footer">
					Elon Musk
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5 justify-content-center ">
		<div class="col-md-8">
			<form action="{{route('trains.store')}}" method="Post">
			@csrf
			  <div class="form-group">
			    <label for="nama">nama</label>
			    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="name" name="nama">
			    
			  </div>
			  <div class="form-group">
			    <label for="email">email</label>
			    <input type="text" class="form-control" id="email" placeholder="email" value="" name="email">
			  </div>
			  <div class="form-group">
			    <label for="paket">paket</label>
			    <input type="text" class="form-control" id="paket" placeholder="paket" value="" name="paket">
			  </div>
			  <div class="form-group">
			    <label for="alamat">alamat</label>
			    <input type="text" class="form-control" id="alamat" placeholder="alamat" value="" name="alamat">
			  </div>
			  <div class="form-group">
			    <label for="pembibing">pembibing</label>
			    <input type="text" class="form-control" id="pembimbing" placeholder="pembibing" value="" name="pembimbing">
			  </div>
			  <div class="form-group">
			    <label for="tanggal">tanggal</label>
			    <input type="text" class="form-control" id="tanggal" placeholder="tanggal" value="" name="tanggal">
			  </div>
			    <input type="submit" value="daftar" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>





@endsection