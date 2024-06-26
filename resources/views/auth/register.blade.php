@extends('layouts.partial.template')

@section('content')
<div class="container-fluid centered-container">
    <h4>Silahkan Register</h4>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Tempat_Lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="Tempat_Lahir" type="Tempat_Lahir" class="form-control @error('Tempat_Lahir') is-invalid @enderror" name="Tempat_Lahir" value="{{ old('Tempat_Lahir') }}" required autocomplete="Tempat_Lahir">

                                @error('Tempat_Lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Tanggal_Lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="Tanggal_Lahir" type="Tanggal_Lahir" class="form-control @error('Tanggal_Lahir') is-invalid @enderror" name="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}" required autocomplete="Tanggal_Lahir">

                                @error('Tanggal_Lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Alamat" class="col-md-4 col-form-label text-md-end">{{ __('Fakultas Jurusan') }}</label>

                            <div class="col-md-6">
                                <input id="Fakultas_Jurusan" type="Fakultas_Jurusan" class="form-control @error('Fakultas_Jurusan') is-invalid @enderror" name="Fakultas_Jurusan" value="{{ old('Fakultas_Jurusan') }}" required autocomplete="Fakultas_Jurusan">

                                @error('Fakultas_Jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="Alamat" type="Alamat" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat') }}" required autocomplete="Alamat">

                                @error('Alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Asal_Kampus" class="col-md-4 col-form-label text-md-end">{{ __('Asal Kampus') }}</label>

                            <div class="col-md-6">
                                <input id="Asal_Kampus" type="Asal_Kampus" class="form-control @error('Asal_Kampus') is-invalid @enderror" name="Asal_Kampus" value="{{ old('Asal_Kampus') }}" required autocomplete="Asal_Kampus">

                                @error('Asal_Kampus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Akun_Media_Sosial" class="col-md-4 col-form-label text-md-end">{{ __('Akun Media Sosial') }}</label>

                            <div class="col-md-6">
                                <input id="Akun_Media_Sosial" type="Akun_Media_Sosial" class="form-control @error('Akun_Media_Sosial') is-invalid @enderror" name="Akun_Media_Sosial" value="{{ old('Akun_Media_Sosial') }}" required autocomplete="Akun_Media_Sosial">

                                @error('Akun_Media_Sosial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Nomor_Handphone" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Handphone') }}</label>

                            <div class="col-md-6">
                                <input id="Nomor_Handphone" type="Nomor_Handphone" class="form-control @error('Nomor_Handphone') is-invalid @enderror" name="Nomor_Handphone" value="{{ old('Nomor_Handphone') }}" required autocomplete="Nomor_Handphone">

                                @error('Nomor_Handphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
