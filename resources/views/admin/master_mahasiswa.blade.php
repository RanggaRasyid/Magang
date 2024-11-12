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
            Master Mahasiswa
        </h4>
    </div>
    <div class="col-md-2 col-12 mb-3 ps-5 d-flex justify-content-between">
    </div>
    <div class="col-md-2 col-12 text-end">
        <button class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#">Add Activity</button>
    </div>
</div>
<div class="col-xl-12">
    <div class="nav-align-top">
        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="navs-pills-justified-users" role="tabpanel">
                <div class="card-datatable table-responsive">
                    <table class="table" id="table-master-mahasiswa">
                        <thead>
                            <tr>
                                <th>NOMOR</th>
                                <th style="min-width: 125px;">Nama Mahasiswa</th>
                                <th>Universitas</th>
                                <th>Jurusan</th>
                                <th>Status</th>
                                <th style="min-width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Alert --}}
<div class="modal fade" id="modalalert" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="../../app-assets/img/alert.png" alt="">
                <h5 class="modal-title" id="modal-title">Apakah anda yakin ingin menonaktifkan Mahasiswa</h5>
                <div class="swal2-html-container" id="swal2-html-container" style="display: block;">
                    Data yang dipilih akan non-aktif</div>
            </div>
            <div class="modal-footer" style="display: flex; justify-content:center;">
                <button type="submit" id="modal-button" class="btn btn-success">Ya, Yakin</button>
                <button type="submit" id="modal-button" class="btn btn-danger">Batal</button>
            </div>

        </div>
    </div>
</div>
@endsection

@section('page_script')
<script src="../../app-assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<script src="../../app-assets/js/forms-extras.js"></script>
<script>

    var table = $('#table-master-mahasiswa').DataTable({
        // "data": jsonData,
        ajax: '{{ route("master.show")}}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy: true,
        columns: [
            {
                data: "nim",
                name: "nim"
            },
            {
                data: "namamhs",
                name: "namamhs"
            },
            {
                data: "namauniv",
                name: "namauniv"
            },
            {
                data: "jurusan",
                name: "jurusan"
            },
            {
                data: "status",
                name: "status"
            },
            {
                data: 'action',
                name: 'action'
            }
            
        ]
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