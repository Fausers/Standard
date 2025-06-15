{{--                Speakers--}}
<div class="col-md-6 pt-20">

    <!--begin::Table widget 14-->
    <div class="card card-flush h-md-100">
        <!--begin::Header-->
        <div class="card-header pt-7">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Destination Attractions</span>

                {{--                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>--}}
            </h3>
            <!--end::Title-->

            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                        data-bs-target="#add_attraction_modal">Add Attraction
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
                    @foreach($destination->attractions as $attraction)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-3">
                                        <img src="/{{$attraction->image}}" class="" alt="">
                                    </div>

                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$attraction->name}}</a>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">{{$attraction->title}}</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-start pe-0">
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$attraction->phone}}</a>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">{{$attraction->email}}</span>
                                </div>
                            </td>

                            <td class="text-end pe-12">
                                <button class="btn btn-primary  btn-flex btn-center btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#edit_attraction_modal_{{$attraction->id}}">
                                    <i class="ki-duotone ki-filter-edit fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                </button>
                                <a href="{{route('admin.destination.attraction.destroy',$attraction->id)}}" class="btn btn-danger  btn-flex btn-center btn-sm">
                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                </a>
                            </td>

                        </tr>


                        <div class="modal fade" id="edit_attraction_modal_{{$attraction->id}}" tabindex="-1" aria-hidden="true">
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
                                        <form method="post" class="form" action="{{route('admin.destination.attraction.update',$attraction->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-10">

                                                <div class="col-md-12">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Title:</label>
                                                    <input required type="text" name="title" value="{{$attraction->title}}" class="form-control form-control-solid" placeholder="Social Media Manager"/>
                                                </div>
                                            </div>



                                            <div class="fv-row mb-10">
                                                <label class="required fs-6 fw-semibold form-label mb-2">Short Speakers Bio:</label>
                                                <textarea required name="desc" data-kt-user-table-filter="search" class="form-control form-control-solid " rows="3">{{$attraction->desc}}</textarea>
                                            </div>
                                            <div class="fv-row mb-10">
                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Speakers Photo:</label>
                                                <img accept=".png, .jpg, .jpeg" src="/{{$attraction->image}}" style="width: 50%">
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



    <div class="modal fade" id="add_attraction_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Add Destination Attraction</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form method="post" class="form" action="{{route('admin.destination.attraction.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input hidden="hidden" name="destination_id" value="{{$destination->id}}">
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <label class="required fs-6 fw-semibold form-label mb-2">Full Name:</label>
                                <input required type="text" name="title" class="form-control form-control-solid" placeholder=""/>
                            </div>

                        </div>


                        <div class="fv-row mb-10">
                            <label class="required fs-6 fw-semibold form-label mb-2">Description:</label>
                            <textarea required name="desc" data-kt-user-table-filter="search" class="form-control form-control-solid " rows="3"></textarea>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="required fs-6 fw-semibold form-label mb-2">Attraction Image:</label>
                            <input type="file" name="file" data-kt-user-table-filter="search" class="form-control form-control-solid " placeholder="Search slides"/>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
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
