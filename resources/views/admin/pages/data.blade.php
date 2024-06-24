@extends('admin.layout.main')
@section('title', 'Data - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Product</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>

                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- btn add --}}
                <div class="card-header pb-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-primary">Tambah
                        Data</a>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">



                        <?php

                                $nomer = 1;

                                ?>

                        @foreach ($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="display" id="test">
                            <thead>
                                <tr>
                                    <th class="text-capitalize text-center">No</th>
                                    <th class="text-capitalize text-center">Image</th>
                                    <th class="text-capitalize text-center">Nama</th>
                                    <th class="text-capitalize text-center">Nama Mandarin</th>
                                    <th class="text-capitalize text-center">Description</th>
                                    <th class="text-capitalize text-center">kategori</th>
                                    <th class="text-capitalize text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center"><img src="{{ asset('images/' . basename($item->image)) }}" alt="gambar" height="70px"></td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->name_mandarin }}</td>
                                    <td class="text-center">{{ $item->description }}</td>
                                    <td class="text-center">{{ $item->kategori->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit{{ $item->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete{{ $item->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="Edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/admin/data/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">


                                                    <div class="mb-3">
                                                        <label for="foto" class="form-label">Image</label>
                                                        <input type="hidden" name="oldImage" value="{{ $item->image }}">
                                                        @if ($item->image)
                                                        <img id="edit-img-preview-{{ $item->id }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('images' . basename($item->image)) }}" alt="Preview Image">
                                                        @else
                                                        <img id="edit-img-preview-{{ $item->id }}" class="img-preview img-fluid mb-3 col-md-6" style="display: none;">
                                                        @endif
                                                        <input type="file" onchange="previewImage(event, 'edit-img-preview-{{ $item->id }}')" name="image" id="foto-edit-{{ $item->id }}" class="form-control" autocomplete="off">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="nama">Name</label>
                                                        <input class="form-control" name="name" id="name" type="text" value="{{ $item->name }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="nama">Name Madarin</label>
                                                        <input class="form-control" name="name_mandarin" id="name" type="text" value="{{ $item->name_mandarin }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="nama">Description</label>
                                                        <textarea class="form-control" name="description" id="description" rows="4" required>{{ $item->description }}</textarea>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="nama">Kategori</label>
                                                        <select class="form-select" name="id_kategori" id="jenis_kendaraan">
                                                            @foreach ($kategori as $data)
                                                            <option value="{{ $data->id }}" class="text-capitalize" {{ $data->id == $item->id_kategori ? 'selected' : '' }}>{{ $data->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button class="btn btn-primary" type="submit">
                                                        Ok
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="Delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda Yakin Akan Menghapus ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="/admin/data/{{ $item->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" id="delete-record{{ $item->id }}">Ya, Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Add Modal --}}
            <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/admin/data" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Image</label>
                                    <img id="add-img-preview" class="img-preview img-fluid mb-3 col-md-6" style="display: none;">
                                    <input type="file" onchange="previewImage(event, 'add-img-preview')" name="image" id="foto-add" class="form-control" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="nama">Name</label>
                                    <input class="form-control" name="name" id="name" type="text" required>
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="nama">Name Madarin</label>
                                    <input class="form-control" name="name_mandarin" id="name" type="text" required>
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="nama">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="nama">Kategori</label>
                                    <select class="form-select" name="id_kategori" id="jenis_kendaraan">
                                        <option selected disabled class="text-capitalize">Pilih Kategori</option>
                                        @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}" class="text-capitalize">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button class="btn btn-primary" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}
        </div>
    </div>
    <!-- DOM / jQuery  Ends-->
</div>

<script>
    function previewImage(event, targetImgId) {
        const input = event.target;
        const imgPreview = document.getElementById(targetImgId);

        const file = input.files[0];
        if (file) {
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(file);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        } else {
            imgPreview.style.display = 'none';
            imgPreview.src = '';
        }
    }

</script>

@endsection

@section('script')
<script>
    $('#test').DataTable({
        autoWidth: true,
        // "lengthMenu": [
        //     [16, 32, 64, -1],
        //     [16, 32, 64, "All"]
        // ]
        dom: 'Bfrtip',


        lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ],

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , text: 'Column Visibility',
                // columns: ':gt(0)'


            },

            {

                extend: 'pageLength'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , text: 'Page Length',
                // columns: ':gt(0)'
            },


            // 'colvis', 'pageLength',

            {
                extend: 'excel'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // {
            //     extend: 'csv',
            //     className: 'btn btn-primary btn-sm',
            //     exportOptions: {
            //         columns: [0, ':visible']
            //     }
            // },
            {
                extend: 'pdf'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            {
                extend: 'print'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // 'pageLength', 'colvis',
            // 'copy', 'csv', 'excel', 'print'

        ]
    , });

</script>
@endsection
