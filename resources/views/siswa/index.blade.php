@extends('_layouts.app')

@section('title', 'Data Siswa Baru')

@section('content')
	
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
            <span>{{ session('success' )}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

	<div id="alert"></div>

	<div class="card shadow">
		<div class="card-header py-2 d-flex justify-content-between align-items-center">
			<h2 class="h6 m-0 font-weight-bold text-primary">Data Siswa Baru</h2>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nis</th>
							<th>Nama</th>
							<th>Asal Sekolah</th>
							<th>Kelas</th>
                            <th>Jurusan</th>
							<th>Aksi</th>
						</tr>
					</thead>
						<tbody>
							@forelse ($users as $user )
								<td>{{ $loop->iteration }}</td>
								<td>{{ $user->nis }}</td>
								<td>{{ $user->nama }}</td>
								<td>{{ $user->asal_sekolah }}</td>
								<td>{{ $user->kelas }}</td>
								<td>{{ $user->jurusan }}</td>
								<td>
									<a href="{{ route('siswa.show', $user->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
								</td>
							@empty
							<tr>
								<td colspan="7" align="center">Kosong</td>
							</tr>
							@endforelse
						</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection