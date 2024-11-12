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
            Loogbook
        </h4>
    </div>
    <div class="col-md-2 col-12 mb-3 ps-5 d-flex justify-content-between">
    </div>
    <div class="col-md-2 col-12 text-end">
        <button class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalTambahMitra">Add Activity</button>
    </div>
</div>
<div class="col-xl-12">
    <div class="nav-align-top">
        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="navs-pills-justified-users" role="tabpanel">
                <div class="card-datatable table-responsive">
                    <table class="table" id="table-loogbook">
                        <thead>
                            <tr>
                                <th>NOMOR</th>
                                <th style="min-width: 125px;">Title</th>
                                <th>Deskription</th>
                                <th>Created-At</th>
                                <th>AKSI</th>
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
                <h5 class="modal-title" id="modal-title">Apakah anda yakin ingin menonaktifkan data</h5>
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
    // var jsonData = [{
    //         "nomor": "1",
    //         "title": "Editing Video",
    //         "deskription": "Melakukan Editing Video",
    //         "aksi": "<a class='btn-icon text-warning waves-effect waves-light' data-bs-toggle='modal' data-bs-target='#modalTambahMitra'><i class='ti ti-edit'></i></a><a class='btn-icon text-danger waves-effect waves-light'><i class='ti ti-circle-x' data-bs-toggle='modal' data-bs-target='#modalalert'></i></a>",
    //     },
    //     {
    //         "nomor": "2",
    //         "title": "Tidur",
    //         "deskription": "Jadwal Kegiatan Sehari-hari yang Kreatif dari Bangun Tidur Sampai Tidur Lagi",
    //         "aksi": "<a class='btn-icon text-warning waves-effect waves-light' data-bs-toggle='modal' data-bs-target='#modalTambahMitra''><i class='ti ti-edit'></i></a><a class='btn-icon text-danger waves-effect waves-light'><i class='ti ti-circle-x' data-bs-toggle='modal' data-bs-target='#modalalert'></i></a>",
    //     },
    //     {
    //         "nomor": "3",
    //        "title": "Melakukan Aktifitas biasa",
    //         "deskription": "Melakukan Editing Video",
    //         "aksi": "<a class='btn-icon text-warning waves-effect waves-light' data-bs-toggle='modal' data-bs-target='#modalTambahMitra''><i class='ti ti-edit'></i></a><a class='btn-icon text-danger waves-effect waves-light'><i class='ti ti-circle-x' data-bs-toggle='modal' data-bs-target='#modalalert'></i></a>",
    //     },
    //     {
    //         "nomor": "4",
    //         "title": "Editing Video",
    //         "deskription": "Melakukan Editing Video",
    //         "aksi": "<a class='btn-icon text-warning waves-effect waves-light'  data-bs-toggle='modal' data-bs-target='#modalTambahMitra''><i class='ti ti-edit'></i></a><a class='btn-icon text-danger waves-effect waves-light'><i class='ti ti-circle-x' data-bs-toggle='modal' data-bs-target='#modalalert'></i></a>",
    //     }
    // ];

    var table = $('#table-loogbook').DataTable({
        // "data": jsonData,
        ajax: '{{ url("mahasiswa/loogbook/show/id")}}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy: true,
        columns: [{
                data: "DT_RowIndex"
            },
            {
                data: "title",
                name: "nama"
            },
            {
                data: "deskription",
                nama: "deskripsi"
            },
            {
                data: "tanggal",
                name: "created_at"
            }
            {
                data: "action",
                name: "action"
            }
        ]
        console.log(ajax);
        
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