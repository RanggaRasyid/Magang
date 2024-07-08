@extends('layouts.partial.template')

@section('content')
    <div class="container-fluid centered-container">
        <h4>Pendaftaran</h4>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Formulir Pendaftaran') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="Nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="Nama" type="text"
                                        class="form-control @error('Nama') is-invalid @enderror" Nama="Nama"
                                        value="{{ old('Nama') }}" required autocomplete="Nama" autofocus
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">

                                    @error('Nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Tempat_Lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="Tempat_Lahir" type="Tempat_Lahir"
                                        class="form-control @error('Tempat_Lahir') is-invalid @enderror" Nama="Tempat_Lahir"
                                        value="{{ old('Tempat_Lahir') }}" required autocomplete="Tempat_Lahir" autofocus
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">

                                    @error('Tempat_Lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Tanggal_Lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="Tanggal_Lahir" type="date"
                                        class="form-control @error('Tanggal_Lahir') is-invalid @enderror"
                                        Nama="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}" required
                                        autocomplete="Tanggal_Lahir">

                                    @error('Tanggal_Lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="Alamat" type="Alamat"
                                        class="form-control @error('Alamat') is-invalid @enderror" Nama="Alamat"
                                        value="{{ old('Alamat') }}" required autocomplete="Alamat">

                                    @error('Alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" Nama="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Nomor_Handphone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="Nomor_Handphone" type="number"
                                        class="form-control @error('Nomor_Handphone') is-invalid @enderror"
                                        Nama="Nomor_Handphone" value="{{ old('Nomor_Handphone') }}" required
                                        autocomplete="Nomor_Handphone"
                                        oninput="if(this.value.length > 14) this.value = this.value.slice(0, 14);">

                                    @error('Nomor_Handphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Asal_Kampus"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Asal Kampus') }}</label>

                                <div class="col-md-6">
                                    <input id="Asal_Kampus" type="Asal_Kampus"
                                        class="form-control @error('Asal_Kampus') is-invalid @enderror" Nama="Asal_Kampus"
                                        value="{{ old('Asal_Kampus') }}" required autocomplete="Asal_Kampus" autofocus
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">

                                    @error('Asal_Kampus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fakultas Jurusan') }}</label>

                                <div class="col-md-6">
                                    <input id="Fakultas_Jurusan" type="Fakultas_Jurusan"
                                        class="form-control @error('Fakultas_Jurusan') is-invalid @enderror"
                                        Nama="Fakultas_Jurusan" value="{{ old('Fakultas_Jurusan') }}" required
                                        autocomplete="Fakultas_Jurusan">

                                    @error('Fakultas_Jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Akun_Media_Sosial"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Akun Media Sosial') }}</label>

                                <div class="col-md-6">
                                    <input id="Akun_Media_Sosial" type="Akun_Media_Sosial"
                                        class="form-control @error('Akun_Media_Sosial') is-invalid @enderror"
                                        Nama="Akun_Media_Sosial" value="{{ old('Akun_Media_Sosial') }}" required
                                        autocomplete="Akun_Media_Sosial">

                                    @error('Akun_Media_Sosial')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Kata Sandi"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="Kata Sandi" type="Kata Sandi"
                                        class="form-control @error('Kata Sandi') is-invalid @enderror" Nama="Kata Sandi"
                                        required autocomplete="new-Kata Sandi">

                                    @error('Kata Sandi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Kata Sandi-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="Kata Sandi-confirm" type="Kata Sandi" class="form-control"
                                        Nama="Kata Sandi_confirmation" required autocomplete="new-Kata Sandi">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
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
