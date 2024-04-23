@extends('layouts.app_admin')
@section('title', 'Hospital Management System')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categories</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/category') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Category Details</h5>
                    </div>
                    <div class="container">
                        <div class="row pt-3">
                            @php
                                $unserializeSection = isset($category->section_name) ? unserialize($category->section_name) : [];
                                $unserializeSectionDes = isset($category->section_description) ? unserialize($category->section_description) : [];
                                $unserializeproductTitle = isset($category->section_product_title) ? unserialize($category->section_product_title) : [];
                                $unserializeproductSupplier = isset($category->section_product_supplier) ? unserialize($category->section_product_supplier) : [];
                                $unserializeproductDes = isset($category->section_product_description) ? unserialize($category->section_product_description) : [];
                                $unserializeproductImage = isset($category->section_product_image) ? unserialize($category->section_product_image) : [];
                            @endphp
                            @foreach ($unserializeSection as $key => $section)
                                <div class="col-12">
                                    <h4 class="fw-bold">{{ $section }}</h4>
                                    @if (isset($unserializeSectionDes[$key]))
                                        <p>{{ $unserializeSectionDes[$key] }}</p>
                                    @else
                                        <p>No description available</p>
                                    @endif
                                </div>
                                @if (isset($unserializeproductTitle['section_' . $key]))
                                    @foreach ($unserializeproductTitle['section_' . $key] as $key => $products)
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card">
                                                @if (isset($unserializeproductImage['section_' . $key][$key]))
                                                    <img class="card-img-top img-fluid"
                                                        src="{{ asset('./images/' . $unserializeproductImage['section_' . $key][$key]) }}"
                                                        alt="Card image cap">
                                                @endif
                                                <div class="card-body">
                                                    <h4 class="card-title mb-2">{{ $products }}</h4>
                                                    @if (isset($unserializeproductDes['section_' . $key][$key]))
                                                        <p class="card-text">
                                                            {{ $unserializeproductDes['section_' . $key][$key] }}
                                                        </p>
                                                    @else
                                                        <p class="card-text">No description available</p>
                                                    @endif
                                                    <div class="text-start">
                                                        @if (isset($unserializeproductSupplier['section_' . $key][$key]))
                                                            <h5><span
                                                                    class="badge badge-soft-primary">{{ $unserializeproductSupplier['section_' . $key][$key] }}</span>
                                                            </h5>
                                                        @else
                                                            <p>No supplier available</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
