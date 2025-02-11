@extends('layouts.admin', ['title' => 'Data Undangan'])
<style>
    .msg-template {
        /* truncate long text */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 580px;
        display: inline-block;
        margin: 0;
        padding: 0;
        height: 27px;
    }
</style>
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data User</h4>
                    <button type="button" class="btn btn-success" onclick="creditUser()">Tambah User</button>
                </div>
                <div class="card-body">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table" id="data-table-user">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Slug</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="creditTemplate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1" id="title-modal">Credit Template</h1>
                    <p>Silahkan isi data dibawah ini.</p>
                </div>
                <form id="creditTemplateForm" class="row gy-1 pt-75" >
                    @csrf
                    <input type="hidden" id="id" name="id" class="form-control">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select id="status" name="status" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="role">Role</label>
                        <select id="role" name="role" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="button" id="btn-submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
@endsection
@section('js')
<script>
    var tableUser = $('#data-table-user').DataTable({
        serverSide: true,
        processing: 'Loading ...',
        ajax: document.location.href,
        paging: true,
        select: true,
        columns: [{
                defaultContent: '-',
                className: 'text-center',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column">
                        ${meta.row + 1}
                    </div>`
                }
            },
            {
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column">
                        <h6 class="mb-0">${row.name ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'nama',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column align-items-center">                        
                        <h6 class="mb-0">${row.email ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'nama',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column align-items-center">                        
                        <h6 class="mb-0">${row.role ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'nama',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column align-items-center">                        
                        <h6 class="mb-0">${row.slug ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'jenis',
                defaultContent: '-',
                className: 'text-center',
                render: (data, type, row, meta) => {
                    let status = ''
                    if (row.status == 'Aktif'){
                        status = `<span class="badge bg-success">${row.status}</span>`
                    } else {
                        status = `<span class="badge bg-danger">${row.status ?? 'Tidak Aktif'}</span>`
                    }
                    return `<div class="d-flex flex-column">
                        ${status}
                    </div>`
                }
            },
            {
                data: null,
                orderable: false,
                render: (data, type, row, meta) => {
                    return `<div class="w-100 text-center"><div class="btn-group ms-auto">
                            <a type="button" onclick="creditUser('${row.id}')" class="w-100 btn btn-warning btn-sm" style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 font-medium-3"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </a>
                            <button type="button" class="w-100 btn btn-danger btn-sm btn-remove-role" onclick="removeUser('${row.id}')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-3"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </div></div>`
                }
            }
        ]
    })
</script>
<script>
    function creditUser(id){
        if (id) {
            $.ajax({
                url: location.href + '?id=' + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $('#id').val(data.id)
                    $('#title-modal').text('Edit User')
                    $('#creditTemplate').modal('show')
                    $('#name').val(data.name)
                    $('#email').val(data.email)
                    $('#role').val(data.role)
                    $('#status').val(data.status)
                }
            })
        }else{
            $('#title-modal').text('Buat User')
            $('#creditTemplate').trigger("reset")
            $('#creditTemplate').modal('show')
        }
    }

    $('#btn-submit').on('click', function(e){
        e.preventDefault();
        const form = $("#creditTemplateForm").get(0);
        let formData = new FormData(form);
        let url = location.href + '/store';
        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            processData: false,
            cache: false,
            contentType: false,
            success: function(res){
                if(res.status == 'success'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: res.message,
                    })
                    $('#creditTemplate').modal('hide')
                    tableUser.ajax.reload()
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: res.message,
                    })
                }
            },
        })
    })

    function removeUser(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: location.origin + "/data-undangan/remove?id=" + id,
                    type: "GET",
                    success: function(res){
                        if(res.status == 'success'){
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: res.message,
                            })
                            tableUser.ajax.reload()
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: res.message,
                            })
                        }
                    }
                })
            }
        })
    }
</script>
@endsection