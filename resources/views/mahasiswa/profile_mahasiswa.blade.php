@extends('mahasiswa.template')
@section('meta_header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-4">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"
                ><i class="ti-xs ti ti-users me-1"></i> Account</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages-account-settings-security.html"
                ><i class="ti-xs ti ti-lock me-1"></i> Security</a
              >
            </li>
          </ul>
          <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                src="../../assets/img/avatars/14.png"
                alt="user-avatar"
                class="d-block w-px-100 h-px-100 rounded"
                id="uploadedAvatar"
                />
                <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="ti ti-upload d-block d-sm-none"></i>
                    <input
                    type="file"
                    id="upload"
                    class="account-file-input"
                    hidden
                    accept="image/png, image/jpeg"
                    />
                </label>
                <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                    <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                </button>

                <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
            </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
                <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input
                    class="form-control"
                    type="text"
                    id="name"
                    name="name"
                    value="John"
                    autofocus
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nim" class="form-label">NIM</label>
                    <input class="form-control" type="text" name="nim" id="nim" value="Doe" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input
                    class="form-control"
                    type="text"
                    id="email"
                    name="email"
                    placeholder="jsh@example.com"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="division" class="form-label">Division</label>
                    <input
                    type="text"
                    class="form-control"
                    id="organization"
                    name="organization"
                    value="Content Creator"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="religion" class="form-label">Religion</label>
                    <input
                    type="text"
                    class="form-control"
                    id="religion"
                    name="religion"
                    value="islamic"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="univ" class="form-label">University Origin</label>
                    <input
                    type="text"
                    class="form-control"
                    id="univ"
                    name="univ"
                    value="Telkom University"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="fakultas" class="form-label">Home faculty</label>
                    <input
                    type="text"
                    class="form-control"
                    id="fakultas"
                    name="fakultas"
                    value="Informatika"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jurusan" class="form-label">Study program</label>
                    <input
                    type="text"
                    class="form-control"
                    id="jurusan"
                    name="jurusan"
                    value="Infromatika"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="place" class="form-label">Place of birth</label>
                    <input
                    type="text"
                    class="form-control"
                    id="place"
                    name="place"
                    value="Bandung"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="birth" class="form-label">date of birth</label>
                    <input
                    type="date"
                    class="form-control"
                    id="birth"
                    name="birth"
                    value="21-01-2004"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <div class="input-group input-group-merge">
                    <span class="input-group-text">INA (+62)</span>
                    <input
                        type="text"
                        id="phoneNumber"
                        name="phoneNumber"
                        class="form-control"
                        placeholder="802 555 0111"
                    />
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                </div>
                
                <div class="mb-3 col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="gender" />
                </div>
                
                </div>
                <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
            </div>
            <!-- /Account -->
        </div>
        
 
</div>
<!-- / Content -->
@endsection