@extends('_layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header py-3">
					<h2 class="h6 m-0 font-weight-bold text-primary">Siswa {{$user->nama}}</h2>
				</div>
				<div class="card-body">
					<dl class="row">
						<dt class="col-4">Nis</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->nis }}</dd>
						<dt class="col-4">Email</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->email }}</dd>
						<dt class="col-4">Jenis Kelamin</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->jns_kelamin }}</dd>
						<dt class="col-4">Tanggal Lahir</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->tgl_lahir }}</dd>
						<dt class="col-4">Alamat</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->alamat }}</dd>
						<dt class="col-4">Kelas</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->kelas }}</dd>
						<dt class="col-4">Status</dt>
						<dd class="col-1">:</dd>
						<dd class="col-7">{{ $user->jurusan }}</dd>
					</dl>
				</div>
				<div class="card-footer">
					<a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</div>
	</div>


@endsection