@extends('layouts.dash')

@section('template_title')
{{$safari->title}}
@endsection

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">

                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        {{$safari->title}}
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('public.home')}}" class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit Safari</li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="{{route('admin.safari.update',$safari->id)}}" method="post" enctype="multipart/form-data" id="kt_invoice_form">
                                    @csrf
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <h3 class=" fw-bold text-gray-700 mb-3">Edit Safari</h3>
                                            <div class="separator separator-dashed"></div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-10">
                                                    <label class="form-label fs-6 mb-1">Safari Title*</label>
                                                    <input required type="text" value="{{old('title') ?  : $safari->title}}" name="title" class="form-control form-control-solid"/>
                                                    @if($errors->has('title'))
                                                        <p style="color: red">{{ $errors->first('title') }}</p>
                                                    @endif
                                                </div>

                                                <!--begin::Input group-->
                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Safari Category:</label>

                                                        <select required name="category_id"  class="form-control form-control-solid">
                                                            @foreach($categories as $category)
                                                                <option {{$category->id === $safari->category_id ? 'selected' : null}} value="{{$category->id}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Duration <strong>(Days)</strong>:</label>
                                                        <input required type="number" name="days" value="{{old('days') ?  : $safari->days}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>

                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Availability:</label>
                                                        <input required type="text" name="availability" value="{{old('availability') ?  : $safari->availability}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Price <strong>(USD)</strong>:</label>
                                                        <input required type="number" name="price" value="{{old('price') ?  : $safari->price}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>


                                                <div class="row mb-10">
                                                     <div class="col-lg-6">
                                                        <label class="form-label fs-6 mb-1">Highlights <small style="color: red">Separate with coma (,)</small></label><br>
                                                        <textarea class="form-control form-control-solid" rows="5" name="desc" required>{{$safari->highlights}}</textarea>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label class="form-label fs-6 mb-1">Short Details</label><br>
                                                        <textarea class="form-control form-control-solid" rows="5" name="desc" required>{{$safari->desc}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="row mb-10">
                                                     <div class="col-lg-6">
                                                        <label class="form-label fs-6 mb-1">Image</label><br>
                                                        <img src="/{{$safari->image}}" alt="{{$safari->title}}" style="width: 300px"/>
                                                        <input type="file" name="file" class="form-control form-control-solid" placeholder="yotube.com"/>
                                                        @if($errors->has('file'))
                                                            <p style="color: red">{{ $errors->first('file') }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                                <hr>
                                                <label class="form-label fs-6 fw-bold text-gray-700">Description</label>
                                                <div id="kt_quil_2" style="height: 325px" class="mb-10">
                                                    {!!  $safari->description !!}
                                                </div>

                                                <label class="form-label fs-6 mb-5">Safari Images</label>
                                                <div class="row">
                                                    @if($safari->images)
                                                        @foreach($safari->images as $img)
                                                            <div class="col-md-4 mb-10 h-250px h-md-375px">
                                                                <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                                                   href="/{{str_replace('"','',$img->image)}}">
                                                                    <!--begin::Image-->
                                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                                                         style="background-image:url('/{{str_replace('"','',$img->image)}}')">
                                                                    </div>
                                                                    <!--end::Image-->

                                                                    <!--begin::Action-->
                                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
                                                                    <!--end::Action-->
                                                                </a>
                                                                <a href="{{route('admin.event.image.destroy',$img->id)}}" class="btn btn-danger  btn-flex btn-center btn-sm">
                                                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    {{--                                                    <input multiple type="file" name="collateral_1_img[]" accept=".png, .jpg, .jpeg" class="form-control form-control-solid"/>--}}
                                                </div>

                                                <div class="col-lg-12 pt-10">
                                                    <label class="form-label fs-6 mb-5">Add Safari Images</label><br>
                                                    <input multiple accept=".png, .jpg, .jpeg" type="file" name="car_images[]" class="form-control form-control-solid" />
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                        <!--begin::Notes-->

                                    </div>
                                    <button type="submit" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Update</button>
                                    <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->


                </div>
                <!--end::Layout-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->



{{--    Modals--}}

    <!--begin::Modal - Adjust Balance-->
    <div class="modal fade" id="add_speaker_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Add Safari Speaker</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form method="post" class="form" action="{{route('admin.event.store.speaker')}}" enctype="multipart/form-data">
                        @csrf
                        <input hidden="hidden" name="event_id" value="{{$safari->id}}">
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold form-label mb-2">Full Name:</label>
                                <input required type="text" name="name" class="form-control form-control-solid" placeholder=""/>
                            </div>
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold form-label mb-2">Title:</label>
                                <input required type="text" name="title" class="form-control form-control-solid" placeholder="Social Media Manager"/>
                            </div>
                        </div>

                        <div class="row mb-10">
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold form-label mb-2">Email Address:</label>
                                <input required type="email" name="email" class="form-control form-control-solid" placeholder=""/>
                            </div>
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold form-label mb-2">Phone Number:</label>
                                <input required type="tel" name="phone" class="form-control form-control-solid" placeholder="Social Media Manager"/>
                            </div>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="required fs-6 fw-semibold form-label mb-2">Short Speakers Bio:</label>
                            <textarea required name="desc" data-kt-user-table-filter="search" class="form-control form-control-solid " rows="3"></textarea>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="required fs-6 fw-semibold form-label mb-2">Select Speakers Photo:</label>
                            <input type="file" name="file" data-kt-user-table-filter="search" class="form-control form-control-solid " placeholder="Search slides"/>
                        </div>

                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3"
                                    data-kt-users-modal-action="cancel">
                                Discard
                            </button>

                            <button type="submit" class="btn btn-primary"
                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">
                                                        Submit
                                                    </span>
                                <span class="indicator-progress">
                                                        Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->
@endsection

@section('page_js')
    <script>

        // Class definition
        var KTQuilDemos = function() {

            // Private functions
            var demo2 = function() {
                var Delta = Quill.import('delta');
                var quill = new Quill('#kt_quil_2', {
                    modules: {
                        toolbar: true
                    },
                    placeholder: 'Type your text here...',
                    theme: 'snow'
                });

                // Store accumulated changes
                var change = new Delta();
                quill.on('text-change', function(delta) {
                    change = change.compose(delta);
                });

                // Save periodically
                setInterval(function() {
                    if (change.length() > 0) {
                        console.log('Saving changes', change);
                        /*
                        Send partial changes
                        $.post('/your-endpoint', {
                        partial: JSON.stringify(change)
                        });
                        Send entire document
                        */

                        $.post('{{route('admin.safari.update.desc',$safari->id)}}}', {
                            doc: JSON.stringify(quill.root.innerHTML)
                        });

                        change = new Delta();
                    }
                }, 5 * 1000);

                // Check for unsaved data
                window.onbeforeunload = function() {
                    if (change.length() > 0) {
                        return 'There are unsaved changes. Are you sure you want to leave?';
                    }
                }
            }

            return {
                // public functions
                init: function() {
                    demo2();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTQuilDemos.init();
        });
    </script>

        <!--begin::Vendors Javascript(used for this page only)-->
    <script src="/office/plugins/custom/fslightbox/fslightbox.bundle.js"></script>


    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="/office/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/office/js/custom/apps/contacts/edit-contact.js"></script>
    <script src="/office/js/custom/apps/invoices/create.js"></script>
    <script src="/office/js/widgets.bundle.js"></script>
    <script src="/office/js/custom/widgets.js"></script>
    <script src="/office/js/custom/apps/chat/chat.js"></script>
    <script src="/office/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/office/js/custom/utilities/modals/create-app.js"></script>
    <script src="/office/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
@endsection
