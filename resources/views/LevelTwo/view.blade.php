@extends('layouts.app_admin')
@section('title', 'Hopital Management System')
@section('main-content')
    <div class="container-fluid">
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Update Level Two</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form id="form_update" class="row g-3 needs-validation" novalidate>
                            @method('PUT')
                            <div class="col-md-12">
                                <label class="form-label">Subcategory Name *</label>
                                <input type="hidden" id="id">
                                <input type="hidden" id="get_url" value="{{ url('/leveltwo') }}">
                                <input type="hidden" id="module_name" value="Level Two">
                                <select name="subcategory" class="form-control" id="subcategory_append">
                                    <option value="" selected disabled>--Select Subcategory--</option>
                                </select>
                                <strong class="text-danger" id="subcategory"></strong>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Level Two Name</label>
                                <input type="text" name="level_two_title" id="name" oninput="NameValidation(this)"
                                    placeholder="Enter Level Two Name" class="form-control" required
                                    style="text-transform: capitalize">
                                <strong id="level_two_title"></strong>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Level Two Slug *</label>
                                <input type="text" class="form-control" name="level_two_slug" id="slug"
                                    value="{{ old('level_two_slug') }}" placeholder="Enter Level Two Slug"
                                    autocomplete="off" required oninput="NameValidation(this)">
                                <strong class="text-danger" id="level_two_slug"></strong>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Sorting Number *</label>
                                <input type="number" class="form-control" name="sorting_number" id="number"
                                    value="{{ old('sorting_number') }}" placeholder="Enter Sorting Number"
                                    autocomplete="off" required>
                                <strong class="text-danger" id="sorting_number"></strong>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Level two Description</label>
                                <textarea name="level_two_description" id="description" oninput="AlphaNumericValidation(this)"
                                    placeholder="Enter Level two Description" rows="3" class="form-control" required></textarea>
                                <strong id="level_two_description"></strong>
                            </div>
                            <div class="col-12 text-end">
                                <button class="btn rounded-pill btn-primary waves-effect waves-light" type="submit"
                                    id="update">Update Level Two > </button>
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
                    <h4 class="mb-sm-0">Level Two</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/leveltwo') }}">Level Two</a></li>
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
                        <h5 class="card-title mb-0">Manage Level Two</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th data-ordering="false">SR No.</th>
                                    <th>Favicon Icon</th>
                                    <th>Level Two Banner</th>
                                    <th>Category Name</th>
                                    <th>Subcategory Name</th>
                                    <th>Level Two Name</th>
                                    <th>Level Two Slug</th>
                                    <th>Sorting Number</th>
                                    <th>Level Two Description</th>
                                    <th>Level Two Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @forelse ($alllevel_two as $level_two)
                                    @if (isset($array_category[$array_data[$level_two->subcategory]['id']]['category_title']))
                                        <tr>
                                            <td data-ordering="false">{{ $num++ }}</td>
                                            <td><img src="{{ './images/' . $level_two->add_favicon }}"
                                                class="avatar-md rounded" alt="Img not found">
                                        </td>
                                        <td><img src="{{ './images/' . $level_two->level_two_banner }}"
                                                class="avatar-md rounded" alt="Img not found">
                                        </td>
                                            <td id="level_two_category_{{ $level_two->id }}">
                                                @if (isset($array_data[$level_two->subcategory]))
                                                    {{ ucfirst($array_category[$array_data[$level_two->subcategory]['id']]['category_title']) }}
                                                @else
                                                    {{ __('---') }}
                                                @endif
                                            </td>
                                            <td id="level_two_subcategory_{{ $level_two->id }}">
                                                {{ ucfirst($array_data[$level_two->subcategory]['subcategory_title']) }}
                                            </td>
                                            <td id="level_two_title_{{ $level_two->id }}">
                                                {{ ucfirst($level_two->level_two_title) }}
                                            </td>
                                            <td id="level_two_slug_{{ $level_two->id }}">
                                                {{ ucfirst($level_two->level_two_slug) }}
                                            </td>
                                            <td id="level_two_sorting_number_{{ $level_two->id }}">
                                                {{ ucfirst($level_two->sorting_number) }}
                                            </td>
                                            <td class="level_two_description_{{ $level_two->id }}" id="get_description"
                                                data-description="{{ $level_two->level_two_description }}"
                                                style="cursor: pointer">
                                                {{ implode(' ', array_slice(explode(' ', $level_two->level_two_description), 0, 4)) }}
                                                <span id="get_description"
                                                    data-description="{{ $level_two->level_two_description }}"
                                                    class="badge bg-light text-dark" style="cursor: pointer">...</span>
                                            </td>
                                            <td>
                                                @if ($level_two->level_two_status == 1)
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="SwitchCheck1" value="{{ $level_two->id }}" checked>
                                                        <label class="form-check-label"
                                                            id="level_two_status_{{ $level_two->id }}"
                                                            for="SwitchCheck1">Active</label>
                                                    </div>
                                                @else
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="SwitchCheck1" value="{{ $level_two->id }}">
                                                        <label class="form-check-label" for="SwitchCheck1"
                                                            id="level_two_status_{{ $level_two->id }}">In-active</label>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <form>
                                                    <input type="hidden" id="get_url" value="{{ url('/leveltwo') }}">
                                                    <input type="hidden" id="module_name" value="level_two">
                                                </form>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="{{ url('/leveltwo/details/' . $level_two->id) }}"
                                                            class="dropdown-item edit-item-btn"
                                                            style="cursor: pointer;"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Details</a></li>
                                                    <li><a href="{{ url('/leveltwo/' . $level_two->id . '/edit') }}"
                                                            class="dropdown-item edit-item-btn"
                                                            style="cursor: pointer;"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn delete"
                                                                data-del="{{ $level_two->id }}" style="cursor: pointer;">
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
                                        <td colspan="11" align="center" style="color:#004454;font-weight:bold;">No
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
                    url: `{{ url('/leveltwo/${value}') }}`,
                    method: "GET",
                    success: function(response) {
                        if (response.message.level_two_status == 2) {
                            $("#level_two_status_" + response.message.id).empty();
                            $("#level_two_status_" + response.message.id).append("Active");
                        } else {
                            $("#level_two_status_" + response.message.id).empty();
                            $("#level_two_status_" + response.message.id).append("In-Active");
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
                    url: `{{ url('/leveltwo/${id}/edit') }}`,
                    method: "GET",
                    success: function(response) {
                        $("#id").empty();
                        $("#name").empty();
                        $("#slug").empty();
                        $("#number").empty();
                        $("#description").empty();
                        $("#subcategory_append").empty();
                        $("#myModal").modal("show");
                        $("#id").val(response.message.id);
                        $("#name").val(response.message.level_two_title);
                        $("#slug").val(response.message.level_two_slug);
                        $("#number").val(response.message.sorting_number);
                        $("#description").val(response.message.level_two_description);
                        $("#subcategory_append").append(
                            "<option selected disabled>--Select Subcategory--</option>");
                        $.each(response.allsubcategory, function(key, value) {
                            $('#subcategory_append').append('<option value=' + value
                                .id +
                                ' style="text-transform:capitalize">' +
                                value.subcategory_title + '</option>');
                        });
                        $("#subcategory_append").val(response.message.subcategory);
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
