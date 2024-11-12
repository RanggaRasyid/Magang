@extends('mahasiswa.template')

@section('page_style')
<link rel="stylesheet" href="../../app-assets/vendor/libs/sweetalert2/sweetalert2.css" />
<style>
    .tooltip-inner {
        max-width: 210px;
        /* If max-width does not work, try using width instead */
        width: 900px;
    }
</style>
@endsection

@section('main')
<div class="row">
    <div class="col-md-8 col-12">
        <h4 class="fw-bold text-sm"><span class="text-muted fw-light text-xs"></span>
            Presensi
        </h4>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="mx-auto my-3">
                {{-- <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100"> --}}
              </div>
              <div class="font-weight-bolder attendance-timer text-primary m-0" id="work-time">09.00.00</div>
              
              <h4 class="mb-1 card-title">Waktu Kerja</h4>
              

              <div class="d-flex align-items-center justify-content-around my-3 py-1">
                <div>
                  <h4 class="mb-0">09.00</h4>
                  <span>Check-in</span>
                </div>
                <div>
                  <h4 class="mb-0">18.00</h4>
                  <span>Check-out</span>
                </div>
                <div>
                  <h4 class="mb-0">21-11-2001</h4>
                  <span>date</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3 waves-effect waves-light"><i class="ti-xs me-1 ti ti-user-check me-1"></i>Check-in</a>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="ti ti-dots-vertical text-muted"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                </ul>
              </div>
              <div class="mx-auto my-3">
                <img src="../../assets/img/avatars/12.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h4 class="mb-1 card-title">Eugenia Parsons</h4>
              <span class="pb-1">Developer</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Angular</span></a>
                <a href="javascript:;"><span class="badge bg-label-info">React</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-3 py-1">
                <div>
                  <h4 class="mb-0">112</h4>
                  <span>Projects</span>
                </div>
                <div>
                  <h4 class="mb-0">23.1k</h4>
                  <span>Tasks</span>
                </div>
                <div>
                  <h4 class="mb-0">1.28k</h4>
                  <span>Connections</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3 waves-effect"><i class="ti-xs me-1 ti ti-user-plus me-1"></i>Connect</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect"><i class="ti ti-mail ti-sm"></i></a>
              </div>
            </div>
          </div>
        </div> --}}
    </div>
    <div class="col-md-8 col-12 g-4">
        <h4 class="fw-bold text-sm"><span class="text-muted fw-light text-xs"></span>
        Daftar Presensi
        </h4>
    </div>
    <div class="col-xl-12">
        <div class="nav-align-top">
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="navs-pills-justified-users" role="tabpanel">
                    <div class="card-datatable table-responsive">
                        <table class="table" id="table-kelola-mitra1">
                            <thead>
                                <tr>
                                    <th>NOMOR</th>
                                    <th style="min-width: 125px;">Chekin</th>
                                    <th>Checkout</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')
<script src="../../app-assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<script src="../../app-assets/js/forms-extras.js"></script>
<script>
    var jsonData = [{
            "nomor": "1",
            "checkin": "09.00",
            "checkout": "17.00",
            "status": "Hadir",
            "date": "2022-01-01"
        },
        {
            "nomor": "2",
            "checkin": "09.00",
            "checkout": "17.00",
            "status": "Hadir",
            "date" : "11-11-2024"
        },
        {
            "nomor": "3",
           "checkin": "09.00",
            "checkout": "17.00",
            "status": "Tidak Hadir",
            "date" : "11-11-2024"
        },
        {
            "nomor": "4",
            "checkin": "09.30",
            "checkout": "17.30",
            "status": "Hadir",
            "date" : "11-11-2024"
        }
    ];

    var table = $('#table-kelola-mitra1').DataTable({
        "data": jsonData,
        columns: [{
                data: "nomor"
            },
            {
                data: "checkin"
            },
            {
                data: "checkout"
            },
            {
                data: "status"
            },
            {
                data: "date"
            }
        ]
    });

    function edit(e) {
        let id = e.attr('data-id');

        let action = `{{ url('sesuaikan') }}/${id}`;
        var url = `{{ url('sesuaikan') }}/${id}`;
        $.ajax({
            type: 'GET',
            url: url,
            success: function(response) {
                $("#modalTambahMitraTitle").html("Edit Pengguna");
                $("#modal-button").html("Update Data")
                $('#modalTambahMitra form').attr('action', action);
                $('#nama').val(response.nama);
                $('#nohp').val(response.nohp);
                $('#email').val(response.email);
                $('#role').val(response.role).trigger('change');

                $('#modal-thn-akademik').modal('show');
            }
        });
    }

    $("#modalTambahMitra").on("hide.bs.modal", function() {

        $("#modalTambahMitraTitle").html("Tambah Pengguna");
        $("#modal-button").html("Simpan")
        $('#modalTambahMitra form')[0].reset();
        $('#modalTambahMitra form #role').val('').trigger('change');
        $('#modalTambahMitra form').attr('action', "{{ url('sesuaikan') }}");
        $('.invalid-feedback').removeClass('d-block');
        $('.form-control').removeClass('is-invalid');
    });

    jQuery(function() {
        jQuery('.showSingle').click(function() {
            jQuery('.targetDiv').hide('.cnt');
            jQuery('#div' + $(this).attr('target')).slideToggle();
        });
    });
</script>

<script src="../../app-assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<script src="../../app-assets/js/extended-ui-sweetalert2.js"></script>
@endsection