@extends('layout/template')
@section('title', 'Ubah Password')
@section('content')
<form action="/v_profile/updatepassword" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
    <div class="row ">
        <div class="col-md-12">
            <div class="main-card mb-3  card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="current_password">Password Lama</label>
                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required>
                                @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="new_password ">Password Baru</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="confirm_password">Konfirmasi Password Baru</label>
                                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" required>
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-first mt-4 ml-2">
                        <button type="submit" class="btn btn-success" id="formSubmit">Simpan</button>
                        <a href="profile" class="btn btn-danger">Batal</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</form>
@endsection