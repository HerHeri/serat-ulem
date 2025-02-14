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
                    <h4 class="card-title">Data Template Undangan</h4>
                    <button type="button" class="btn btn-success" onclick="creditTemplate()">Tambah Template</button>
                </div>
                <div class="card-body">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table" id="data-table-template">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Template</th>
                                    <th class="text-center">Url</th>
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
                        <label class="form-label" for="title">Nama Template</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan Nama Template" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="url">URL Template</label>
                        <input type="text" id="url" name="url" class="form-control" placeholder="Masukkan URL Template" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="image">Image Template</label>
                        <input type="file" id="image" name="image" class="form-control" placeholder="Masukkan URL Template" />
                        <div id="lihat-image"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select id="status" name="status" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Template</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="deskripsi">Deskripsi Template</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
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
    var tableUndangan = $('#data-table-template').DataTable({
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
                data: 'title',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column">
                        <h6 class="mb-0">${row.title ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'url',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column align-items-center">
                        <h6 class="mb-0  msg-template">${row.url}</h6>
                    </div>`
                }
            },
            {
                data: 'status',
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
                                <a type="button" onclick="creditTemplate('${row.id}')" class="w-100 btn btn-warning btn-sm" style="color: white;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 font-medium-3"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </a>
                                <a type="button" onclick="copyLink('${row.url}')" class="w-100 btn btn-info btn-sm" style="color: white;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                </a>
                                <button type="button" class="w-100 btn btn-danger btn-sm btn-remove-role" onclick="removeUndangan('${row.id}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-3"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </button>
                            </div>
                        </div>`
                }
            }
        ]
    })
</script>
<script>
    function creditTemplate(id){
        if (id) {
            $.ajax({
                url: location.origin + "/template-undangan?id=" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#id').val(data.id)
                    $('#title-modal').text('Edit Template Undangan')
                    $('#creditTemplate').modal('show')
                    $('#title').val(data.title)
                    $('#url').val(data.url)
                    $('#status').val(data.status)
                    $('#deskripsi').val(data.deskripsi)
                    if (data.image) {
                        let url = location.origin + '/assets/template-undangan/' + data.image
                        $('#lihat-image').html(`<a href="${url}" id="lihat-image" target="_blank" rel="noopener noreferrer">Lihat Image</a>`)
                    }
                }
            })
        }else{
            $('#title-modal').text('Tambah Template')
            $('#creditTemplate').trigger("reset")
            $('#creditTemplate').modal('show')
        }
    }

    $('#btn-submit').on('click', function(e){
        e.preventDefault();
        const form = $("#creditTemplateForm").get(0);
        let formData = new FormData(form);
        let url = location.href + '/store';
        console.log(url);
        
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
                    tableUndangan.ajax.reload()
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

    function template(id){
        $.ajax({
            url: location.origin + "/data-undangan?temp_id=" + id,
            type: "GET",
            contentType: false,
            success: function(data) {
                $('#message').val(data.message)
            }
        })
    }

    $('#template').on('change', function(e){
        e.preventDefault();
        let temp_id = $(this).val()
        template(temp_id)
    })

    function copyLink(slug){
        let url = location.origin + "/temp/" + slug
        navigator.clipboard.writeText(url);
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Link copied to clipboard',
        })
    }

    function removeUndangan(id){
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
                            tableUndangan.ajax.reload()
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

    function sendUndangan(id, phone){
        $.ajax({
            url: location.origin + "/data-undangan?id_und=" + id,
            type: "GET",
            success: function(res){
                navigator.clipboard.writeText(res.msg);
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Text copied to clipboard',
                })
                // let link = `https://wa.me/${phone}?text=${res.msg}`
                // console.log(link);
                // if(res.status == 'success'){
                //     Swal.fire({
                //         icon: 'success',
                //         title: 'Success',
                //         text: res.message,
                //     })
                //     tableUndangan.ajax.reload()
                // }else{
                //     Swal.fire({
                //         icon: 'error',
                //         title: 'Oops...',
                //         text: res.message,
                //     })
                // }
            }
        })
    }
</script>
@endsection
