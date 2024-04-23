@extends('layouts.app_admin')
@section('title', 'Hospital Management System')
@section('main-content')
    <div class="container-fluid">
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Update Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form id="form_update" class="row g-3 needs-validation" novalidate>
                            @method('PUT')
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Category Name</label>
                                <input type="hidden" id="id">
                                <input type="hidden" id="get_url" value="{{ url('/category') }}">
                                <input type="hidden" id="module_name" value="Category">
                                <input type="text" name="category_title" id="name" oninput="NameValidation(this)"
                                    placeholder="Enter Category Name" class="form-control" required
                                    style="text-transform: capitalize">
                                <strong id="category_title"></strong>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Category Slug *</label>
                                <input type="text" class="form-control" name="category_slug" id="slug"
                                    value="{{ old('category_slug') }}" placeholder="Enter Category Slug" autocomplete="off"
                                    required oninput="NameValidation(this)">
                                <strong class="text-danger" id="category_slug"></strong>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Sorting Number *</label>
                                <input type="number" class="form-control" name="sorting_number" id="number"
                                    value="{{ old('sorting_number') }}" placeholder="Enter Sorting Number"
                                    autocomplete="off" required>
                                <strong class="text-danger" id="sorting_number"></strong>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Category Description</label>
                                <textarea name="category_description" id="description" oninput="AlphaNumericValidation(this)"
                                    placeholder="Enter Category Description" rows="3" class="form-control" required></textarea>
                                <strong id="category_description"></strong>
                            </div>
                            <div class="col-12 text-end">
                                <button class="btn rounded-pill btn-primary waves-effect waves-light" type="submit"
                                    id="update">Update Category > </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModalDescription" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">View Description</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <p id="view_description"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categories</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/category') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Manage</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Manage Categories</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th data-ordering="false">SR No.</th>
                                    <th>Favicon Icon</th>
                                    <th>Banner Image</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Sorting Number</th>
                                    <th>Category Description</th>
                                    <th>Category Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @forelse ($allcategory as $category)
                                    <tr>
                                        <td data-ordering="false">{{ $num++ }}</td>
                                        <td><img src="{{ './images/' . $category->add_favicon }}" class="avatar-md rounded"
                                                alt="Img not found">
                                        </td>
                                        <td><img src="{{ './images/' . $category->category_banner }}"
                                                class="avatar-md rounded" alt="Img not found">
                                        </td>
                                        <td id="category_title_{{ $category->id }}">
                                            {{ ucfirst($category->category_title) }}
                                        </td>
                                        <td id="category_slug_{{ $category->id }}">{{ ucfirst($category->category_slug) }}
                                        </td>
                                        <td id="category_sorting_number_{{ $category->id }}">
                                            {{ ucfirst($category->sorting_number) }}
                                        </td>
                                        <td class="category_description_{{ $category->id }}" id="get_description"
                                            data-description="{{ $category->category_description }}"
                                            style="cursor: pointer">
                                            {{ implode(' ', array_slice(explode(' ', $category->category_description), 0, 4)) }}
                                            <span id="get_description"
                                                data-description="{{ $category->category_description }}"
                                                class="badge bg-light text-dark" style="cursor: pointer">...</span>
                                        </td>
                                        <td>
                                            @if ($category->category_status == 1)
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="SwitchCheck1" value="{{ $category->id }}" checked>
                                                    <label class="form-check-label"
                                                        id="category_status_{{ $category->id }}"
                                                        for="SwitchCheck1">Active</label>
                                                </div>
                                            @else
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="SwitchCheck1" value="{{ $category->id }}">
                                                    <label class="form-check-label" for="SwitchCheck1"
                                                        id="category_status_{{ $category->id }}">In-active</label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <form>
                                                <input type="hidden" id="get_url" value="{{ url('/category') }}">
                                                <input type="hidden" id="module_name" value="Category">
                                            </form>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="{{ url('/category/details/' . $category->id) }}"
                                                            class="dropdown-item edit-item-btn"
                                                            style="cursor: pointer;"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Details</a></li>
                                                    <li><a href="{{ url('/category/' . $category->id . '/edit') }}"
                                                            class="dropdown-item edit-item-btn"
                                                            style="cursor: pointer;"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn delete"
                                                            data-del="{{ $category->id }}" style="cursor: pointer;">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" align="center" style="color:#004454;font-weight:bold;">No
                                            Data Avalable</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                "dom": 'Bfrtip',
                "buttons": [{
                        extend: 'excel',
                        className: 'btn btn-primary rounded-0',
                        text: '<i class="bx bx-file"></i> Excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-primary rounded-0',
                        text: '<i class="bx bx-file"></i> Pdf',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-primary rounded-0',
                        text: '<i class="fas fa-file-csv" style="font-size:17px;"></i> CSV',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        }
                    },
                ]
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
        $(document).ready(function() {
            $(document).on("change", "#SwitchCheck1", function(stop) {
                stop.preventDefault();
                var value = $(this).val();
                $.ajax({
                    url: `{{ url('/category/${value}') }}`,
                    method: "GET",
                    success: function(response) {
                        if (response.message.category_status == 2) {
                            $("#category_status_" + response.message.id).empty();
                            $("#category_status_" + response.message.id).append("Active");
                        } else {
                            $("#category_status_" + response.message.id).empty();
                            $("#category_status_" + response.message.id).append("In-Active");
                        }
                    }
                })
            })
            $(document).on("click", ".update", function(stop) {
                stop.preventDefault();
                var id = $(this).data("update");
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });
                $.ajax({
                    url: `{{ url('/category/${id}/edit') }}`,
                    method: "GET",
                    success: function(response) {
                        $("#id").empty();
                        $("#name").empty();
                        $("#slug").empty();
                        $("#number").empty();
                        $("#description").empty();
                        $("#myModal").modal("show");
                        $("#id").val(response.message.id);
                        $("#name").val(response.message.category_title);
                        $("#slug").val(response.message.category_slug);
                        $("#number").val(response.message.sorting_number);
                        $("#description").val(response.message.category_description);
                    }
                })
            });
            $(document).on("click", "#get_description", function(stop) {
                stop.preventDefault();
                $("#myModalDescription").modal("show");
                var value = $(this).data("description");
                $("#view_description").empty();
                $("#view_description").append(value);
            })
        })
    </script>
    <script>
        function NameValidation(element) {
            let InputText = element.value;
            element.value = InputText.replace(/[^A-za-z, ]/, "");
            if (element.value == InputText) {
                element.value = InputText;
            } else {
                Swal.fire({
                    toast: true,
                    icon: 'warning',
                    title: 'Number and Special Character are Not Allowed',
                    animation: false,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 2500,
                    timeProgressBar: true,
                })
            }
        }
    </script>
    <script>
        function AlphaNumericValidation(element) {
            let InputText = element.value;
            element.value = InputText.replace(/[^A-za-z0-9[$&+,:;=?@#|'<>.^*(){}%"!~-_ ]/, "");
            if (element.value == InputText) {
                element.value = InputText;
            } else {
                Swal.fire({
                    toast: true,
                    icon: 'warning',
                    title: 'Special Character Not Allowed ',
                    animation: false,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 3000,
                    timeProgressBar: true,
                })
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $(document).on("input", "#name", function(stop) {
                stop.preventDefault();
                var inputValue = $(this).val();
                var slug = inputValue.replace(/\s+/g, '-');
                $("#slug").val(slug);
            });
        });
    </script>
@endsection
