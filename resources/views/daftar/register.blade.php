@extends('_layouts.user')

@section('content')

<div class="col-lg-6 mx-auto">
    <div class="card shadow">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header py-3">
                <h2 class="h6 m-0 font-weight-bold text-primary">Form Pendaftaraan</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nis</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                        value="{{ old('nis') }}" placeholder="Nis" autofocus>

                    @error('nis')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama') }}" placeholder="Nama" autofocus>

                    @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                        name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" autofocus>

                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password"
                        class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                        id="exampleInputPassword" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control form-control-user"
                        name="password_confirmation" required autocomplete="new-password" placeholder="password confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
					<label>Jenis Kelamin</label>
					<select class="form-control custom-select @error('jns_kelamin') is-invalid @enderror" name="jns_kelamin">
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>

					@error('jns_kelamin')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control form-control-user @error('tgl_lahir') is-invalid @enderror"
                        name="tgl_lahir" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Tanggal Lahir" autofocus>

                    @error('tgl_lahir')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat">{{ old('alamat') }}</textarea>

					@error('alamat')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>

                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control form-control-user @error('asal_sekolah') is-invalid @enderror"
                        name="asal_sekolah" placeholder="Asal Sekolah" autofocus>

                    @error('asal_sekolah')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control form-control-user @error('kelas') is-invalid @enderror"
                        name="kelas" placeholder="Kelas" autofocus>

                    @error('kelas')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control form-control-user @error('jurusan') is-invalid @enderror"
                        name="jurusan" placeholder="Jurusan" autofocus>

                    @error('jurusan')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary shadow" type="submit">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>

@endsection
