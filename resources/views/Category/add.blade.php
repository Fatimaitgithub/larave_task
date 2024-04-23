@extends('layouts.app_admin')
@section('title', 'Hospital Management System')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Category</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/category') }}">Category</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Add Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="live-preview">
                            <form id="form_submit" class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="hidden" id="get_url" value="{{ url('/category') }}">
                                    <input type="hidden" id="module_name" value="Category">
                                    <input type="text" class="form-control" id="title" name="category_title"
                                        value="{{ old('category_title') }}" placeholder="Enter Category Name"
                                        autocomplete="off" required oninput="NameValidation(this)">
                                    <strong class="text-danger" id="category_title"></strong>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Category Slug *</label>
                                    <input type="text" class="form-control" name="category_slug" id="slug"
                                        value="{{ old('category_slug') }}" placeholder="Enter Category Slug"
                                        autocomplete="off" required oninput="NameValidation(this)">
                                    <strong class="text-danger" id="category_slug"></strong>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Sorting Number *</label>
                                    <input type="number" class="form-control" name="sorting_number"
                                        value="{{ old('sorting_number') }}" placeholder="Enter Sorting Number"
                                        autocomplete="off" required>
                                    <strong class="text-danger" id="sorting_number"></strong>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Add Favicon *</label>
                                    <input type="file" class="form-control" name="add_favicon"
                                        value="{{ old('add_favicon') }}" placeholder="Enter Sorting Number"
                                        autocomplete="off" required>
                                    <strong class="text-danger" id="add_favicon"></strong>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Category Banner *</label>
                                    <input type="file" class="form-control" name="category_banner"
                                        value="{{ old('category_banner') }}" placeholder="Enter Sorting Number"
                                        autocomplete="off" required>
                                    <strong class="text-danger" id="category_banner"></strong>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Category Description *</label>
                                    <textarea name="category_description" id="category_description" rows="3" oninput="AlphaNumericValidation(this)"
                                        required class="form-control" placeholder="Enter Category Description">{{ old('category_description') }}</textarea>
                                    <strong class="text-danger" id="category_description"></strong>
                                </div>
                                <h4><i class="fas fa-comments-dollar"></i>
                                    {{ ucwords('Products Data') }}</h4>
                                <hr>
                                <h6 class="text-danger fw-bold">
                                    {{ __('Note Here: If You want to add the section then " Section Title " Will be Requried.') }}
                                </h6>
                                <hr>
                                <div id="campaign_fields">
                                    <div id="campaign_fields_attr_0" class="mt-3 mb-3 ps-3 pe-3"
                                        style="background-color: whitesmoke">
                                        <div class="row mt-3">
                                            <div class="col-12 text-end">
                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-3"
                                                    onclick="addCampaignSection();">Add Section</button>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="form-label">Title <span class="text-muted">(Heading)</span>
                                                    *</label>
                                                <input type="text" name="section_name[]" multiple class="form-control"
                                                    placeholder="Enter Section Title">
                                                <strong class="text-danger" id="section_name"></strong>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="form-label">Description * </label>
                                                <input type="text" name="section_description[]" multiple
                                                    class="form-control" placeholder="Section Description">
                                                <strong class="text-danger" id="section_description"></strong>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light mt-3"
                                                    onclick="addProductSection(0);">Add Product Section</button>
                                            </div>
                                            <div id="section_product_fields_0">
                                                <div id="section_product_fields_attr_0">
                                                    <div class="row">
                                                        <div class="col-4 mt-2 mb-3">
                                                            <label for="form-label">Product Title* </label>
                                                            <input type="text" name="section_product_title_0[]"
                                                                class="form-control" placeholder="Enter the Title"
                                                                multiple>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                        <div class="col-4 mt-2 mb-3">
                                                            <label for="form-label">Product Supplier* </label>
                                                            <input type="text" name="section_product_supplier_0[]"
                                                                class="form-control" placeholder="Enter the Supplier"
                                                                multiple>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                        <div class="col-4 mt-2 mb-3">
                                                            <label for="form-label">Product URL* </label>
                                                            <input type="url" placeholder="Enter Product URL"
                                                                name="section_product_url_0[]" class="form-control"
                                                                multiple>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                        <div class="col-6 mt-2 mb-3">
                                                            <label for="form-label">Brand Image* </label>
                                                            <input type="file" name="section_product_brand_0[]"
                                                                class="form-control" multiple>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                        <div class="col-6 mt-2 mb-3">
                                                            <label for="form-label">Product Image* </label>
                                                            <input type="file" name="section_product_image_0[]"
                                                                class="form-control" multiple>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                        <div class="col-12 mt-2 mb-3">
                                                            <label for="form-label">Product Description* </label>
                                                            <textarea type="text" rows="3" name="section_product_description_0[]" class="form-control"
                                                                placeholder="Enter the Description" multiple></textarea>
                                                            <strong class="text-danger"
                                                                id="email_template_description"></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <a href="{{ url('/category') }}" type="submit" id="button_move"
                                        class="btn rounded-pill btn-light text-dark waves-effect waves-light">
                                        < Go back</a>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn rounded-pill btn-primary waves-effect waves-light" type="submit"
                                        id="insert">Add Category > </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <p class="fw-bold">Favicon Icon</p>
                <img class="img-thumbnail" alt="200x200" id="image_thumbnail" width="450"
                    src="{{ asset('./images/dummy.png') }}">
                <br>
                <p class="fw-bold">Baner Image</p>
                <img class="img-thumbnail" id="image_thumbnail_second" alt="200x200" width="450"
                    src="{{ asset('./images/dummy.png') }}">
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on("change", "input[name='logo']", function(event) {
                event.preventDefault();
                var file = event.target.files[0];
                $("#image_thumbnail")
                    .css({
                        opacity: 0
                    })
                    .slideDown("slow")
                    .animate({
                        opacity: 1
                    }, function() {
                        $(this).prop("required", true);
                        $(this).attr("src", URL.createObjectURL(file));
                    });
            });

            $(document).on("change", "input[name='category_banner']", function(event) {
                event.preventDefault();
                var file = event.target.files[0];

                // $("#image_thumbnail")
                //     .animate({
                //         opacity: 0
                //     })
                //     .slideUp("slow", function() {
                //         $(this).prop("required", false);
                //     });

                $("#image_thumbnail_second")
                    .css({
                        opacity: 0
                    })
                    .slideDown("slow")
                    .animate({
                        opacity: 1
                    }, function() {
                        $(this).prop("required", true);
                        $(this).attr("src", URL.createObjectURL(file));
                    });
            });
        });
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
            $(document).on("input", "#title", function(stop) {
                stop.preventDefault();
                var inputValue = $(this).val();
                var slug = inputValue.replace(/\s+/g, '-');
                $("#slug").val(slug);
            });
        });
    </script>
    <script>
        var count_campaign = 0;
        var count_product = 0;

        function addCampaignSection() {
            count_campaign++;
            var campaignHtml = `
        <div id='campaign_fields_attr_${count_campaign}' class='mt-3 mb-3 ps-3 pe-3'  style='background-color: whitesmoke'>
            <div class='row mt-3'>
                <div class='col-12 text-end'>
                    <button type='button' class='btn btn-danger waves-effect waves-light mt-3' onclick='removeCampaign(${count_campaign});'>Remove Section</button>
                </div>
                <div class='col-6 mt-3'>
                    <label for='form-label'>Title <span class='text-muted'>(Heading)</span> *</label>
                    <input type='text' name='section_name[]'  multiple class='form-control' placeholder='Enter Section Title' >
                    <strong class='text-danger' id='section_name'></strong>
                </div>
                <div class='col-6 mt-3'>
                    <label for='form-label'>Description * </label>
                    <input type='text' name='section_description[]' multiple class='form-control'  placeholder='Section Description'>
                    <strong class='text-danger' id='section_description'></strong>
                </div>
                <div class='col-12 text-end'>
                    <button type='button' class='btn btn-primary waves-effect waves-light mt-3' onclick='addProductSection(${count_campaign});'>Add Product Section</button>
                </div>
                <div id="section_product_fields_${count_campaign}">
                <div id="section_product_fields_attr_${count_campaign}">
                    <div class="row">
                        <div class="col-4 mt-2 mb-3">
                    <label for="form-label">Product Title* </label>
                    <input type="text" name="section_product_title_${count_campaign}[]"
                        class="form-control" placeholder="Enter the Title"  multiple>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                <div class="col-4 mt-2 mb-3">
                    <label for="form-label">Product Supplier* </label>
                    <input type="text" name="section_product_supplier_${count_campaign}[]"
                        class="form-control" placeholder="Enter the Supplier"
                         multiple>
                    <strong class="text-danger" id="email_template_description"></strong>

                                                    <div class="col-4 mt-2 mb-3">
                                                        <label for="form-label">Product URL* </label>
                                                        <input type="url" placeholder="Enter Product URL" name="section_product_url_${count_campaign}[]"
                                                            class="form-control"  multiple>
                                                        <strong class="text-danger"
                                                            id="email_template_description"></strong>
                                                    </div>
                                                </div>
                <div class="col-6 mt-2 mb-3">
                                                        <label for="form-label">Brand Image* </label>
                                                        <input type="file" name="section_product_brand_${count_campaign}[]"
                                                            class="form-control"  multiple>
                                                        <strong class="text-danger"
                                                            id="email_template_description"></strong>
                                                    </div>
                                                    <div class="col-6 mt-2 mb-3">
                    <label for="form-label">Product Image* </label>
                    <input type="file" name="section_product_image_${count_campaign}[]"
                        class="form-control"
                         multiple>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                <div class="col-12 mt-2 mb-3">
                    <label for="form-label">Product Description* </label>
                    <textarea type="text" rows="3" name="section_product_description_${count_campaign}[]" class="form-control"
                        placeholder="Enter the Description"  multiple></textarea>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                </div>
                    </div>
                </div>
            </div>
        </div>`;
            jQuery("#campaign_fields").append(campaignHtml);
        }


        function removeCampaign(count) {
            jQuery("#campaign_fields_attr_" + count).remove();
        }

        function addProductSection(campaignCount) {
            count_product++;
            const productHtml = `
        <div id='section_product_fields_attr_${count_product}'>
            <div class="row">
                <div class='col-12 text-end'>
                    <button type='button' class='btn btn-danger waves-effect waves-light mt-3' onclick='removeProductSection(${count_product});'>Remove Product Section</button>
                </div>
                <div class="col-4 mt-2 mb-3">
                    <label for="form-label">Product Title* </label>
                    <input type="text" name="section_product_title_${campaignCount}[]"
                        class="form-control" placeholder="Enter the Title"  multiple>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                <div class="col-4 mt-2 mb-3">
                    <label for="form-label">Product Supplier* </label>
                    <input type="text" name="section_product_supplier_${campaignCount}[]"
                        class="form-control" placeholder="Enter the Supplier"
                         multiple>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                <div class="col-6 mt-2 mb-3">
                                                        <label for="form-label">Brand Image* </label>
                                                        <input type="file" name="section_product_brand_${campaignCount}[]"
                                                            class="form-control"  multiple>
                                                        <strong class="text-danger"
                                                            id="email_template_description"></strong>
                                                    </div>
                                                    <div class="col-6 mt-2 mb-3">
                    <label for="form-label">Product Image* </label>
                    <input type="file" name="section_product_image_${campaignCount}[]"
                        class="form-control"
                         multiple>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
                <div class="col-12 mt-2 mb-3">
                    <label for="form-label">Product Description* </label>
                    <textarea type="text" rows="3" name="section_product_description_${campaignCount}[]" class="form-control"
                        placeholder="Enter the Description"  multiple></textarea>
                    <strong class="text-danger" id="email_template_description"></strong>
                </div>
            </div>
        </div>`;

            jQuery(`#section_product_fields_${campaignCount}`).append(productHtml);
        }


        function removeProductSection(count) {
            jQuery("#section_product_fields_attr_" + count).remove();
        }
    </script>


@endsection
