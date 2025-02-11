@extends('layouts.admin', ['title' => 'Data Ucapan'])

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
                    <h4 class="card-title">Data Ucapan</h4>
                </div>
                <div class="card-body">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table" id="data-table-ucapan">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Undangan</th>
                                    <th class="text-center">Ucapan</th>
                                    <th class="text-center">Konfirmasi</th>
                                    {{-- <th class="text-center">Action</th> --}}
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
@section('js')
<script>
    var tableUndangan = $('#data-table-ucapan').DataTable({
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
                        <h6 class="mb-0">${row.nama ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'nama',
                defaultContent: '-',
                render: (data, type, row, meta) => {
                    return `<div class="d-flex flex-column align-items-center">                        
                        <h6 class="mb-0">${row.ucapan ?? '-'}</h6>
                    </div>`
                }
            },
            {
                data: 'jenis',
                defaultContent: '-',
                className: 'text-center',
                render: (data, type, row, meta) => {
                    let date = new Date(row.created_at)
                    return `<div class="d-flex flex-column">
                        <h6 class="mb-0">${row.konfirmasi ?? '-'}</h6>
                    </div>`
                }
            },
            // {
            //     data: null,
            //     orderable: false,
            //     render: (data, type, row, meta) => {
            //         return `<div class="w-100 text-center"><div class="btn-group ms-auto">
            //                 <a type="button" onclick="creditUndangan('${row.id}')" class="w-100 btn btn-warning btn-sm" style="color: white;">
            //                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 font-medium-3"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
            //                 </a>
            //                 <button type="button" class="w-100 btn btn-danger btn-sm btn-remove-role" onclick="removeUndangan('${row.id}')">
            //                     <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-3"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            //                 </button>
            //             </div></div>`
            //     }
            // }
        ]
    })
</script>
@endsection