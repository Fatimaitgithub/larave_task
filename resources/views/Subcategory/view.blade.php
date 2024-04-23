@extends('layouts.app_admin')
@section('title', 'Hospital Management System')
@section('main-content')
    <div class="container-fluid">
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
                    <h4 class="mb-sm-0">Subcategories</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/subcategory') }}">Subcategories</a></li>
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
                        <h5 class="card-title mb-0">Manage Subcategories</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th data-ordering="false">SR No.</th>
                                    <th>Add Favicon</th>
                                    <th>Subcategory Banner</th>
                                    <th>Category Name</th>
                                    <th>Subcategory Name</th>
                                    <th>Subcategory Slug</th>
                                    <th>Sorting Number</th>
                                    <th>Subcategory Description</th>
                                    <th>Subcategory Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @forelse ($allsubcategory as $subcategory)
                                    @if (isset($array_data[$subcategory->category]))
                                        <tr>
                                            <td data-ordering="false">{{ $num++ }}</td>
                                            <td><img src="{{ './images/' . $subcategory->add_favicon }}"
                                                    class="avatar-md rounded" alt="Img not found">
                                            </td>
                                            <td><img src="{{ './images/' . $subcategory->subcategory_banner }}"
                                                    class="avatar-md rounded" alt="Img not found">
                                            </td>
                                            <td id="subcategory_category_{{ $subcategory->id }}">
                                                {{ ucfirst($array_data[$subcategory->category]) }}
                                            </td>
                                            <td id="subcategory_title_{{ $subcategory->id }}">
                                                {{ ucfirst($subcategory->subcategory_title) }}
                                            </td>
                                            <td id="subcategory_slug_{{ $subcategory->id }}">
                                                {{ ucfirst($subcategory->subcategory_slug) }}
                                            </td>
                                            <td id="subcategory_sorting_number_{{ $subcategory->id }}">
                                                {{ ucfirst($subcategory->sorting_number) }}
                                            </td>
                                            <td class="subcategory_description_{{ $subcategory->id }}" id="get_description"
                                                data-description="{{ $subcategory->subcategory_description }}"
                                                style="cursor: pointer">
                                                {{ implode(' ', array_slice(explode(' ', $subcategory->subcategory_description), 0, 4)) }}
                                                <span id="get_description"
                                                    data-description="{{ $subcategory->subcategory_description }}"
                                                    class="badge bg-light text-dark" style="cursor: pointer">...</span>
                                            </td>
                                            <td>
                                                @if ($subcategory->subcategory_status == 1)
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="SwitchCheck1" value="{{ $subcategory->id }}" checked>
                                                        <label class="form-check-label"
                                                            id="subcategory_status_{{ $subcategory->id }}"
                                                            for="SwitchCheck1">Active</label>
                                                    </div>
                                                @else
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="SwitchCheck1" value="{{ $subcategory->id }}">
                                                        <label class="form-check-label" for="SwitchCheck1"
                                                            id="subcategory_status_{{ $subcategory->id }}">In-active</label>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <form>
                                                    <input type="hidden" id="get_url" value="{{ url('/subcategory') }}">
                                                    <input type="hidden" id="module_name" value="Subcategory">
                                                </form>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="{{ url('/subcategory/details/' . $subcategory->id) }}"
                                                                class="dropdown-item edit-item-btn"
                                                                style="cursor: pointer;"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Details</a></li>
                                                        <li><a href="{{ url('/subcategory/' . $subcategory->id . '/edit') }}"
                                                                class="dropdown-item edit-item-btn"
                                                                style="cursor: pointer;"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn delete"
                                                                data-del="{{ $subcategory->id }}" style="cursor: pointer;">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="10" align="center" style="color:#004454;font-weight:bold;">No
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
                    url: `{{ url('/subcategory/${value}') }}`,
                    method: "GET",
                    success: function(response) {
                        if (response.message.subcategory_status == 2) {
                            $("#subcategory_status_" + response.message.id).empty();
                            $("#subcategory_status_" + response.message.id).append("Active");
                        } else {
                            $("#subcategory_status_" + response.message.id).empty();
                            $("#subcategory_status_" + response.message.id).append("In-Active");
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
                    url: `{{ url('/subcategory/${id}/edit') }}`,
                    method: "GET",
                    success: function(response) {
                        $("#id").empty();
                        $("#name").empty();
                        $("#slug").empty();
                        $("#number").empty();
                        $("#description").empty();
                        $("#category_append").empty();
                        $("#myModal").modal("show");
                        $("#id").val(response.message.id);
                        $("#name").val(response.message.subcategory_title);
                        $("#slug").val(response.message.subcategory_slug);
                        $("#number").val(response.message.sorting_number);
                        $("#description").val(response.message.subcategory_description);
                        $("#category_append").append(
                            "<option selected disabled>--Select Category--</option>");
                        $.each(response.allcategory, function(key, value) {
                            $('#category_append').append('<option value=' + value.id +
                                ' style="text-transform:capitalize">' +
                                value.category_title + '</option>');
                        });
                        $("#category_append").val(response.message.category);
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
