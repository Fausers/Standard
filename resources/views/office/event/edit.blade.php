@extends('layouts.dash')

@section('template_title')
{{$event->title}}
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
                        {{$event->title}}
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
                        <li class="breadcrumb-item text-muted">
                            Edit Slide
                        </li>
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
                                <form action="{{route('admin.event.update',$event->id)}}" method="post" enctype="multipart/form-data" id="kt_invoice_form">
                                    @csrf
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <h3 class=" fw-bold text-gray-700 mb-3">Edit Slide</h3>
                                            <div class="separator separator-dashed"></div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="form-label fs-6 mb-1">Event Title*</label>
                                                    <input required type="text" value="{{old('title') ?  : $event->title}}" name="title" class="form-control form-control-solid"/>
                                                    @if($errors->has('title'))
                                                        <p style="color: red">{{ $errors->first('title') }}</p>
                                                    @endif
                                                </div>

                                                <!--begin::Input group-->
                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Event Category:</label>

                                                        <select required name="category_id"  class="form-control form-control-solid">
                                                            @foreach($categories as $category)
                                                                <option {{$category->id === $event->category_id ? 'selected' : null}} value="{{$category->id}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Organizer:</label>
                                                        <input required type="text" name="organizer" value="{{old('title') ?  : $event->organizer}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>

                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Start Date:</label>
                                                        <input required type="date" name="start_date" value="{{old('title') ?  : $event->start_date}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">End Date:</label>
                                                        <input required type="date" name="end_date" value="{{old('title') ?  : $event->end_date}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>

                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Start Time:</label>
                                                        <input required type="time" name="start_time" value="{{old('title') ?  : $event->start_time}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">End Time:</label>
                                                        <input required type="time" name="end_time" value="{{old('title') ?  : $event->end_time}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>

                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Contact Phone:</label>
                                                        <input required type="text" name="phone" value="{{old('title') ?  : $event->phone}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Contact email:</label>
                                                        <input required type="email" name="email" value="{{old('title') ?  : $event->email}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                </div>

                                                <div class="row mb-10">
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Address:</label>
                                                        <input required type="text" name="address" value="{{old('title') ?  : $event->address}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Venue:</label>
                                                        <input required type="text" name="venue" value="{{old('title') ?  : $event->venue}}" class="form-control form-control-solid" placeholder=""/>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label class="form-label fs-6 mb-1">Image</label><br>
                                                        <img src="/{{$event->image}}" alt="{{$event->title}}" style="width: 300px"/>
                                                        <input type="file" name="file" class="form-control form-control-solid" placeholder="yotube.com"/>
                                                        @if($errors->has('file'))
                                                            <p style="color: red">{{ $errors->first('file') }}</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label fs-6 mb-1">Short Details</label><br>
                                                        <textarea class="form-control form-control-solid" rows="5" name="desc" required>{{$event->desc}}</textarea>
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                                <hr>
                                                <label class="form-label fs-6 fw-bold text-gray-700">Description</label>
                                                <div id="kt_quil_2" style="height: 325px" class="mb-10">
                                                    {!!  $event->description !!}
                                                </div>

                                                <label class="form-label fs-6 mb-5">Event Images</label>
                                                <div class="row">
                                                    @if($event->images)
                                                        @foreach($event->images as $img)
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
                                                    <label class="form-label fs-6 mb-5">Add Event Images</label><br>
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

{{--                Speakers--}}
                <div class="col-md-6 pt-20">

                    <!--begin::Table widget 14-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Event Speakers</span>

{{--                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>--}}
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#add_speaker_modal">Add Speaker
                                </button>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                        <th class="p-0 pb-3 text-start">Speaker</th>
                                        <th class="p-0 pb-3 min-w-100px text-start">Contacts</th>
                                        <th class="p-0 pb-3 w-50px text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                    @foreach($event->speakers as $speaker)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/{{$speaker->image}}" class="" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$speaker->name}}</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">{{$speaker->title}}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-start pe-0">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$speaker->phone}}</a>
                                                    <span class="text-gray-400 fw-semibold d-block fs-7">{{$speaker->email}}</span>
                                                </div>
                                            </td>

                                            <td class="text-end pe-12">
                                                <button class="btn btn-primary  btn-flex btn-center btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#edit_speaker_modal_{{$speaker->id}}">
                                                    <i class="ki-duotone ki-filter-edit fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                </button>
                                                <a href="{{route('admin.event.destroy.speaker',$speaker->id)}}" class="btn btn-danger  btn-flex btn-center btn-sm">
                                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                </a>
                                            </td>

                                        </tr>


                                        <div class="modal fade" id="edit_speaker_modal_{{$speaker->id}}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered mw-800px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Add Event Speaker</h2>
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                             data-kt-users-modal-action="close">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <form method="post" class="form" action="{{route('admin.event.update.speaker',$speaker->id)}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row mb-10">
                                                                <div class="col-md-6">
                                                                    <label class="required fs-6 fw-semibold form-label mb-2">Full Name:</label>
                                                                    <input required type="text" name="name" value="{{$speaker->name}}" class="form-control form-control-solid" placeholder=""/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="required fs-6 fw-semibold form-label mb-2">Title:</label>
                                                                    <input required type="text" name="title" value="{{$speaker->title}}" class="form-control form-control-solid" placeholder="Social Media Manager"/>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-10">
                                                                <div class="col-md-6">
                                                                    <label class="required fs-6 fw-semibold form-label mb-2">Email Address:</label>
                                                                    <input required type="email" name="email" value="{{$speaker->email}}" class="form-control form-control-solid" placeholder=""/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="required fs-6 fw-semibold form-label mb-2">Phone Number:</label>
                                                                    <input required type="tel" name="phone" value="{{$speaker->phone}}" class="form-control form-control-solid" placeholder="Social Media Manager"/>
                                                                </div>
                                                            </div>

                                                            <div class="fv-row mb-10">
                                                                <label class="required fs-6 fw-semibold form-label mb-2">Short Speakers Bio:</label>
                                                                <textarea required name="desc" data-kt-user-table-filter="search" class="form-control form-control-solid " rows="3">{{$speaker->desc}}</textarea>
                                                            </div>
                                                            <div class="fv-row mb-10">
                                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Speakers Photo:</label>
                                                                <img accept=".png, .jpg, .jpeg" src="/{{$speaker->image}}" style="width: 50%">
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
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 14-->
                </div>

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
                    <h2 class="fw-bold">Add Event Speaker</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form method="post" class="form" action="{{route('admin.event.store.speaker')}}" enctype="multipart/form-data">
                        @csrf
                        <input hidden="hidden" name="event_id" value="{{$event->id}}">
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

                        $.post('{{route('admin.event.update.desc',$event->id)}}}', {
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
