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
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="live-preview">
                            <form id="form_update" class="row g-3 needs-validation" novalidate>
                                @method('PUT')
                                <div class="col-md-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="hidden" id="id" value="{{ $category->id }}">
                                    <input type="hidden" id="get_url" value="{{ url('/category') }}">
                                    <input type="hidden" id="module_name" value="Category">
                                    <input type="text" class="form-control" id="title" name="category_title"
                                        value="{{ $category->category_title }}" placeholder="Enter Category Name"
                                        autocomplete="off" required oninput="NameValidation(this)">
                                    <strong class="text-danger" id="category_title"></strong>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Category Slug *</label>
                                    <input type="text" class="form-control" name="category_slug" id="slug"
                                        value="{{ $category->category_slug }}" placeholder="Enter Category Slug"
                                        autocomplete="off" required oninput="NameValidation(this)">
                                    <strong class="text-danger" id="category_slug"></strong>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Sorting Number *</label>
                                    <input type="number" class="form-control" name="sorting_number"
                                        value="{{ $category->sorting_number }}" placeholder="Enter Sorting Number"
                                        autocomplete="off" required>
                                    <strong class="text-danger" id="sorting_number"></strong>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Add Favicon *</label>
                                    <input type="file" class="form-control" name="add_favicon"
                                        value="{{ old('add_favicon') }}" placeholder="Enter Sorting Number"
                                        autocomplete="off">
                                    <strong class="text-danger" id="add_favicon"></strong>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Category Banner *</label>
                                    <input type="file" class="form-control" name="category_banner"
                                        value="{{ old('category_banner') }}" placeholder="Enter Sorting Number"
                                        autocomplete="off">
                                    <strong class="text-danger" id="category_banner"></strong>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Category Description *</label>
                                    <textarea name="category_description" id="category_description" rows="3" oninput="AlphaNumericValidation(this)"
                                        required class="form-control" placeholder="Enter Category Description">{{ $category->category_description }}</textarea>
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
                                    @php
                                        $unserializeSection = isset($category->section_name) ? unserialize($category->section_name) : [];
                                        $unserializeSectionDes = isset($category->section_description) ? unserialize($category->section_description) : [];
                                        $unserializeproductTitle = isset($category->section_product_title) ? unserialize($category->section_product_title) : [];
                                        $unserializeproductSupplier = isset($category->section_product_supplier) ? unserialize($category->section_product_supplier) : [];
                                        $unserializeproductDes = isset($category->section_product_description) ? unserialize($category->section_product_description) : [];
                                        $unserializeproductImage = isset($category->section_product_image) ? unserialize($category->section_product_image) : [];
                                        $unserializeproductBrand = isset($category->section_product_brand) ? unserialize($category->section_product_brand) : [];
                                        $unserializeproductURL = isset($category->section_product_url) ? unserialize($category->section_product_url) : [];
                                    @endphp
                                    <input type="hidden" id="count_section" value="{{ count($unserializeSection) }}">
                                    <div class="row mt-3">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-primary waves-effect waves-light mt-3"
                                                onclick="addCampaignSection();">Add Section</button>
                                        </div>
                                    </div>
                                    @foreach ($unserializeSection as $sectionkey => $section)
                                        <div id="campaign_fields_attr_{{ $sectionkey }}" class="mt-3 mb-3 ps-3 pe-3"
                                            style="background-color: whitesmoke">
                                            <div class="row mt-3">
                                                <div class="col-12 text-end">
                                                    <button type="button"
                                                        class="btn btn-danger waves-effect waves-light mt-3"
                                                        onclick="removeCampaign(0);">Remove Section</button>
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="form-label">Title <span
                                                            class="text-muted">(Heading)</span>
                                                        *</label>
                                                    <input type="text" name="section_name[]"
                                                        value="{{ $section != '' ? $section : '' }}" multiple
                                                        class="form-control" placeholder="Enter Section Title">
                                                    <strong class="text-danger" id="section_name"></strong>
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="form-label">Description * </label>
                                                    <input type="text" name="section_description[]"
                                                        value="{{ isset($unserializeSectionDes[$sectionkey]) ? $unserializeSectionDes[$sectionkey] : '' }}"
                                                        multiple class="form-control" placeholder="Section Description">
                                                    <strong class="text-danger" id="section_description"></strong>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect waves-light mt-3"
                                                        onclick="addProductSection(0);">Add Product Section</button>
                                                </div>
                                                @if (isset($unserializeproductTitle["section_".$sectionkey]))
                                                    @php
                                                        if (!is_array($unserializeproductTitle["section_".$sectionkey])) {
                                                            $unserializeproductTitle["section_".$sectionkey] = [$unserializeproductTitle["section_".$sectionkey]];
                                                        }
                                                    @endphp

                                                    @foreach ($unserializeproductTitle["section_".$sectionkey] as $key => $products)
                                                        <div id="section_product_fields_{{ $key }}">
                                                            <div id="section_product_fields_attr_{{ $key }}">
                                                                <div class="row">
                                                                    <div class="col-4 mt-2 mb-3">
                                                                        <label for="form-label">Product Title* </label>
                                                                        <input type="text"
                                                                            name="section_product_title_{{ $sectionkey }}[]"
                                                                            class="form-control"
                                                                            value="{{ $products != '' ? $products : '' }}"
                                                                            placeholder="Enter the Title" multiple>
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                    <div class="col-4 mt-2 mb-3">
                                                                        <label for="form-label">Product Supplier* </label>
                                                                        <input type="text"
                                                                            name="section_product_supplier_{{ $sectionkey }}[]"
                                                                            class="form-control"
                                                                            value="{{ isset($unserializeproductSupplier["section_".$sectionkey][$key]) ? $unserializeproductSupplier["section_".$sectionkey][$key] : '' }}"
                                                                            placeholder="Enter the Supplier" multiple>
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                    <div class="col-4 mt-2 mb-3">
                                                                        <label for="form-label">Product URL* </label>
                                                                        <input type="url"
                                                                            placeholder="Enter Product URL"
                                                                            name="section_product_url_{{ $sectionkey }}[]"
                                                                            class="form-control"
                                                                            value="{{ isset($unserializeproductURL["section_".$sectionkey][$key]) ? $unserializeproductURL["section_".$sectionkey][$key] : '' }}"
                                                                            multiple>
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                    <div class="col-6 mt-2 mb-3">
                                                                        <label for="form-label">Brand Image* </label>
                                                                        <input type="file"
                                                                            name="section_product_brand_{{ $sectionkey }}[]" class="form-control" multiple>
                                                                        <img src="{{ asset(isset($unserializeproductBrand["section_".$sectionkey][$key]) ? './images/' . $unserializeproductBrand["section_".$sectionkey][$key] : '') }}"
                                                                            class="img-thumbnail mt-2 avatar-lg">
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                    <div class="col-6 mt-2 mb-3">
                                                                        <label for="form-label">Product Image* </label>
                                                                        <input type="file"
                                                                            name="section_product_image_{{ $sectionkey }}[]" class="form-control"
                                                                            multiple>
                                                                        <img src="{{ asset(isset($unserializeproductImage["section_".$sectionkey][$key]) ? './images/' . $unserializeproductImage["section_".$sectionkey][$key] : '') }}"
                                                                            class="img-thumbnail mt-2 avatar-lg"
                                                                            alt="">
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                    <div class="col-12 mt-2 mb-3">
                                                                        <label for="form-label">Product Description*
                                                                        </label>
                                                                        <textarea type="text" rows="3" name="section_product_description_{{ $sectionkey }}[]"
                                                                            value="{{ isset($unserializeproductDes["section_".$sectionkey][$key]) ? $unserializeproductDes["section_".$sectionkey][$key] : '' }}"
                                                                            class="form-control" placeholder="Enter the Description" multiple>{{ isset($unserializeproductDes["section_".$sectionkey][$key]) ? $unserializeproductDes["section_".$sectionkey][$key] : '' }}</textarea>
                                                                        <strong class="text-danger"
                                                                            id="email_template_description"></strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('/category') }}" type="submit" id="button_move"
                                        class="btn rounded-pill btn-light text-dark waves-effect waves-light">
                                        < Go back</a>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn rounded-pill btn-primary waves-effect waves-light" type="submit"
                                        id="update">Edit Category > </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <p class="fw-bold">Favicon Icon</p>
                <img class="img-thumbnail" alt="200x200" id="image_thumbnail" width="450"
                    src="{{ asset('./images/' . $category->add_favicon) }}">
                <br>
                <p class="fw-bold">Baner Image</p>
                <img class="img-thumbnail" id="image_thumbnail_second" alt="200x200" width="450"
                    src="{{ asset('./images/' . $category->category_banner) }}">
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on("change", "input[name='add_favicon']", function(event) {
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
                <div class="col-4 mt-2 mb-3">
                                                        <label for="form-label">Product URL* </label>
                                                        <input type="url" placeholder="Enter Product URL" name="section_product_url_${campaignCount}[]"
                                                            class="form-control"  multiple>
                                                        <strong class="text-danger"
                                                            id="email_template_description"></strong>
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
